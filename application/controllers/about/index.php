<?php

$smarty = new Smarty();

$smarty->assign('views', VIEWS);

$smarty->assign('currency', CURRENCY);

$smarty->display(VIEWS.'/about/index.tpl');

