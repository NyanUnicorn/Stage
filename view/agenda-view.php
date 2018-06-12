<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
          editable:true,
          header:{
            left:'prev, next today',
            center: 'title',
            right: 'month, agendaWeek, agendaDay'
          },
          events:'http://le-chiro-qui-roule.local/agenda.php?load=true'
        });
      });
    </script>



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
                  <h2> <a href="#">FullCalendar</a> </h2>
                  <div id="calendar">

                    </div>
                    <?php
                    $errorZone = '<div class="errorZone">';
                    foreach($errors as $error){
                      $errorZone .= '<p class="error">'.$error.'</p>';

                    }
                    $errorZone .= '</div>';
                    echo $errorZone;
                     ?>

                     <div class="rendezvous">
                       <form class="prendreRendezvous" action="agenda.php" method="post">
                         <div class="elem">
                           <label for="nom">Nom :</label>
                           <input type="text" name="nom" id="nom" value=<?php echo '"'. htmlentities($USER->getNom()).'"'; ?>>
                         </div>
                         <div class="elem">
                           <label for="prenom">Prenom :</label>
                           <input type="text" name="prenom" id="prenom" value=<?php echo '"'. htmlentities($USER->getPre()).'"';  ?>>
                         </div>
                         <div class="elem">
                           <label for="adresse">Adresse :</label>
                           <input type="text" name="adresse" id="adresse" value=<?php echo '"'. htmlentities($USER->getAdresse()).'"';  ?>>
                         </div>
                         <div class="elem">
                           <label for="ville">Ville :</label>
                           <input type="text" name="ville" id="ville" value=<?php echo '"'. htmlentities($USER->getVille()).'"';  ?>>
                         </div>
                         <div class="elem">
                           <label for="supp">Information Supplementaire :</label>
                           <input type="text" name="supp" id="supp" value=<?php echo '"'. htmlentities($USER->getCompAdresse()).'"';  ?>>
                         </div>
                         <div class="elem">
                           <label for="dtRdv">Date et Heure de rendez-vous :</label>
                           <input type="datetime-local" name="dtRdv" id="dtRdv" value="">
                         </div>
                         <div class="elem">
                           <label for="duree">Premier rendez vous ?</label>
                           <div class="radio">
                             <label for="non">non</label>
                             <input type="radio" name="premier" id="non" value="1" checked="checked">
                             <label for="oui">oui</label>
                             <input type="radio" name="premier" id="oui" value="0">
                           </div>
                         </div>
                         <input type="submit" name="submit" value="Confirmer">
                       </form>
                     </div>

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
