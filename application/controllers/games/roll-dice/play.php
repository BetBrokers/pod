<?php
use Lottobits\Application\Helper\Games\Lottery\TicketHelper;

$helper = new TicketHelper();
$smarty = new Smarty();

$smarty->assign('title', 'Lottobits');
$smarty->assign('getBuyTicket', $helper->getBuyTicket());
$smarty->assign('views', VIEWS);
$smarty->assign('addressForBuyTicket', TicketHelper::getAddressForBuyTicket());
$smarty->assign('latestBets', $helper->getLatestBets());
$smarty->assign('reward', $helper->getReward());
$smarty->assign('currency', CURRENCY);

$smarty->display(VIEWS.'/games/rollDice/play.tpl');

