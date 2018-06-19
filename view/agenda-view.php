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
                  <div class="calendar_rdv">


                  <h2> Prendre rendez-vous </h2>
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
                     <?php
                     use Service\Connection;
                     if(Connection::authenticated()){
                       require '../models/pieces/rendezvous_rdv_form.php';
                     }else{
                       require '../models/pieces/rendezvous_con_form.php';
                     }
                     ?>

                   </div>
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
