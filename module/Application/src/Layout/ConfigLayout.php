<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);
if($uri[3] == 'exchange'){
   require __DIR__ . '/../../../Broker/view/layout/layout.phtml';
}
if($uri[3] == 'account'){
    require __DIR__ . '/../../../Auth/view/layout/layout.phtml';
}
else{
    require __DIR__ . '/../../../Broker/view/layout/layout.phtml';
}?>

