<?php

use Lottobits\Application\Helper\Games\Lottery\ResultsHelper;

$helper = new ResultsHelper();

$smarty = new Smarty();

$smarty->assign('title', 'Lottobits');
$smarty->assign('show', $helper->show());
$smarty->assign('views', VIEWS);
$smarty->assign('currency', CURRENCY);

$smarty->display(VIEWS.'/games/lottery/results.tpl');

