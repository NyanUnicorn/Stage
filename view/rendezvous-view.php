<!DOCTYPE html>
<html  lang="fr" dir="ltr">
<head>

	<title><?php echo 'hh' ?></title>

	<meta charset="utf-8">

	<?php
			echo $head;
			echo $stylesheet;
	 ?>

</head>
<body ng-app="lechiroquiroule">
	<div id="page" ng-controller="menuCollapse">
			<div id="page_wrapper" class="page_wrapper">
				<div id="menu_wrapper" class="menu_wrapper">
				<?php  require 'menu-view.php';  ?>
				</div>
				<div id="body" >
					<?php	require 'header-view.php'; ?>
					<main ng-click="untoggleMenu();">
						<div class="encart">
							<?php require 'side-nav-view1.php'; ?>
						</div>
						<div class="main">
							<div class="content-area">
                 <div class="monRendezvous">
                   <label class="userLabel" for="">Nom : <?php echo $RDV->getNom() ?></label>
                   <label class="userLabel" for="">Prenom : <?php echo $RDV->getPrenom() ?></label>
                   <label class="userLabel" for="">Adresse : <?php echo $RDV->getAdresse() ?></label>
                   <label class="userLabel" for="">Ville : <?php echo $RDV->getVille() ?></label>
                   <label class="userLabel" for="">Date du rendez-vous : <?php echo $RDV->getDateRdv() ?></label>
                   <label class="userLabel" for="">Durée du rendez-vous : <?php echo $RDV->getDuree() ?></label>
                   <label class="userLabel" for="">Informations supplémentaires : <?php echo $RDV->getInfoSupp() ?></label>
                   <?php
                   use Enumeration\RdvStatus;
                   use Enumeration\Roles;
                   $output = '<div class="pendingRdvOptions">';
                   if($USER->getRole() == Roles::User){
                     if($RDV->getStatus() == RdvStatus::Requested){
                       $output .= '<a href="rendezvous.php?myrdv='.$RDV->getUrlId().'&option=confirm">Confirmer</a>';
                       $output .= '<a href="rendezvous.php?myrdv='.$RDV->getUrlId().'&option=refuse">Refuser</a>';
                     }
                   }
                   echo $output . '</div>';

                    ?>

                 </div>
							 </div>
							</div>
						</div>
					</main>
					<?php
					require 'footer-view.php';
					?>
				</div>
			</div>
		</div>
	</body>
</html>
