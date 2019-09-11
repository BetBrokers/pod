<?php
use Lottobits\Application\Helper\Wallet\DepositsHelper;
use Lottobits\Application\Model\Wallet\DepositsModel;
//use Lottobits\Application\Helper\Games\RollDice\PlayHelper;

$deposits = new DepositsHelper();
$aux = VENDOR.'/lottobits/lottobits/src/qr_img0.50j/php/qr_img.php?';
$aux .= 'd='.DepositsModel::$addressForDeposits.'&';
$aux .= 'e=H&';
$aux .= 's=10&';
$aux .= 't=J';
$smarty = new Smarty();

$smarty->assign('title', 'Lottobits');
$smarty->assign('addBalance', $deposits->addBalance());
$smarty->assign('views', VIEWS);
$smarty->assign('addressForDeposits', DepositsModel::$addressForDeposits);


$smarty->assign('aux', $aux);
$smarty->assign('qr', VENDOR.'/lottobits/lottobits/src/qr_img0.50j/php/qr_img.php');
$smarty->assign('currency', CURRENCY);

$smarty->display(VIEWS.'/wallet/deposits.tpl');

