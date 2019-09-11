<?php

use Lottobits\Application\Helper\Profile\ProfileManagerHelper;

$helper = new ProfileManagerHelper();

$smarty = new Smarty();

$smarty->assign('title', 'Lottobits');
$smarty->assign('generateProfile', $helper->generateProfile());
$smarty->assign('views', VIEWS);
$smarty->assign('currency', CURRENCY);

$smarty->display(VIEWS.'/profile/signup.tpl');
