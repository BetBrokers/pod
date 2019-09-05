<?php 

require_once(VIEWS.'/layout/templates/header.tpl');

 \Lottobits\Mvc\Application::controller(CONTROLLER, $settings);

require_once(VIEWS.'/layout/templates/footer.tpl');
 
?>
 		