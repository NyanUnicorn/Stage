<?php
require '../src/autoload.php';

/* Ici on demande a la machine d'aller chercher les services
 nous permettant de trouver les pages de style,
connection et les images dans l'explorateur de fichier */
use Service\Style;
use Service\Connection;
use Service\Image;
use Repository\UserRepository as UserRep;
session_start();

/* $head est utilisé pour appeler le header*/
$head = Style::includeExternalHead();
/* $stylesheet est utilisé pour appeler les pages de style*/
$stylesheet = Style::getStylesheet('style') . Style::getStylesheet('header-grid') . Style::getStylesheet('side-nav-grid') . Style::getStylesheet('navbar1') . Style::getStylesheet('page-content') . Style::getStylesheet('font/flaticon') . Style::getStylesheet('style_user');
/* $foot est utilisé pour appeler le footer*/
$foot = Style::includeExternalFoot();


///////////////////////////////////////////////////////////////////////
// if(Connection::authenticated()){
//   header('Location: /index.php');
// }else{
//   /* Verification de l'email et mdp*/
//   $errors = Connection::checkLoginInput();
//   /* Si pas d'erreurs connexion de l'utilisateur */
//   if(!(count($errors) > 0)){
//     $_SESSION['emailInput'] = Form::getInputPost('email');
//     $errors = Connection::authentication($errors, $_POST['email'], $_POST['password']);
//   }
// }

////////////////////////////////////////////////////////////////////////////////

$USER = $_SESSION['USER'];
$_SESSION['usersEmail0099'] = $_SESSION['USER']->getEmail();

$errors = [];
var_dump($_POST);
$errors = Connection::checkLoginInput();
/* Si pas d'erreurs connexion de l'utilisateur */
if(!(count($errors) > 0)){
    $errors = Connection::canette2Soda();

    if(count($errors)<=0){
      $userInfo = UserRep::loginUser( $_POST['email'], $_POST['password']);

      if($userInfo != 'no_login'){
        $errors = array_merge($errors, Connection::modifUser());
        var_dump($errors);
    }
  }
}

/* $image est utilisé pour récuperer les images*/
$image['logoTable'] = Image::displayImage('logoTable.png');
$image['logoVelo'] = Image::displayImage('logoVelo.png');
/* $uri est la variable servant a recuperer le nom de la page */
$uri = $_SERVER['REQUEST_URI'];
$USER = $_SESSION['USER'];
$_SESSION['usersEmail0099'] = $_SESSION['USER']->getEmail();
var_dump($USER);


if(Connection::authenticated()){

  $result = UserRep::userInfo($_SESSION['USER']->getEmail())->fetchAll()['0'];
  var_dump($result);
  $USER->setPre($result['prenom']);
  $USER->setNom($result['nom']);
  $USER->setDataNais($result['date_nais']);
  $USER->setAdresse($result['adresse']);
  $USER->setCompAdresse($result['complement']);
  $USER->setVille($result['ville']);
  $USER->setCodePostale($result['cd_postale']);
  $USER->setTel($result['telephone']);
  $USER->setEmail($result['email']);
  $USER->setProfession($result['profession']);
  $USER->setNewsletter($result['newsletter']);

}else{
  /*echo '<script type="text/javascript">alert("Vous n\'êtes pas connecté ou vous avez été déconnecté")</script>';
  header('Location:../index.php');*/

  }
/* $navStatus determine l'affichage de la navbar selon si l'utilisateur est connecté ou non */
$navStatus = Connection::navConnexion();
$menuStatus = Connection::menuConnexion();

/*ouverture de la page*/
require '../view/user-profile-view.php';
