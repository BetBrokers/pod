<?php
use Lottobits\Application\Helper\Games\Lottery\TicketHelper;

$helper = new TicketHelper();
$aux = VENDOR.'/lottobits/lottobits/src/qr_img0.50j/php/qr_img.php?';
$aux .= 'd='.TicketHelper::getAddressForBuyTicket().'&';
$aux .= 'e=H&';
$aux .= 's=10&';
$aux .= 't=J';
$smarty = new Smarty();

$smarty->assign('title', 'Lottobits');
$smarty->assign('getBuyTicket', $helper->getBuyTicket());
$smarty->assign('views', VIEWS);
$smarty->assign('addressForBuyTicket', TicketHelper::getAddressForBuyTicket());


$smarty->assign('aux', $aux);
$smarty->assign('qr', VENDOR.'/lottobits/lottobits/src/qr_img0.50j/php/qr_img.php');
$smarty->assign('latestBets', $helper->getLatestBets());
$smarty->assign('currency', CURRENCY);

$smarty->display(VIEWS.'/games/lottery/play.tpl');

