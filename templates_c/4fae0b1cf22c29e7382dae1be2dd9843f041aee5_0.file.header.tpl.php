<?php
/* Smarty version 3.1.33, created on 2019-09-03 13:38:48
  from 'C:\wamp64\www\lottery\application\views\layout\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6e6ce8110802_11238734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fae0b1cf22c29e7382dae1be2dd9843f041aee5' => 
    array (
      0 => 'C:\\wamp64\\www\\lottery\\application\\views\\layout\\templates\\header.tpl',
      1 => 1567517918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6e6ce8110802_11238734 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Altcoin Casino, Biggest Jackpots! Worldcoin, Megacoin, Blackcoin, Vertcoin, Bitshares, Bitcoin, Litecoin, Dogecoin, Zetacoin, Namecoin, Crypto, Devcoin, Peercoin, Primecoin, Coin Casino, Crypto Casino, Lottery, Dice, Keno!">
		<meta name="author" content="Cryptic Entertainment">

		<title>Lottobits</title>
		<link href="//netdna.bootstrapcdn.com/bootswatch/3.2.0/darkly/bootstrap.min.css" rel="stylesheet">
		<link href="/assets/css/casino.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"><?php echo '</script'; ?>
>
		<![endif]-->

		<link id="favicon" rel="shortcut icon" href="http://<?php echo '<?php ';?>echo $_SERVER['HTTP_HOST']<?php echo '?>';?>'/public/assets/images/favicon.ico">

		<style>
			input[type="radio"] {
				display: none;
			}
			.rollLabel {
				height: 30px;
				width: 30px;
				text-align: center;
				color: white;
				border-radius: 20px;
				line-height: 27px;
				border: 1px solid white
			}
			.orange {
				background: rgb(247,147,26);
			}
			.blue {
				background: #428bca;
			}
			.red {
				background: #d9534f;
			}
			.green {
				background: #5cb85c;
			}
			.grey {
				background: #5bc0de;
			}
			.activeLabel {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row header">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<h3 class="text-muted pull-left title"><img alt="" src="http://<?php echo '<?php ';?>echo $_SERVER['HTTP_HOST'].'/lottery/public/images/lottobits.png'<?php echo '?>';?>">Lottobits</h3>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<ul class="nav nav-pills pull-right">
						<li><input type="text" class="form-control" id="nick" value="Anonymous"></li>
						
						<li class="menu" id="r2"><a href="#!r2">Roll Two</a></li>
						<li class="menu" id="p3"><a href="#!p3">Pick Three</a></li>
					</ul>
				</div>
			</div><?php }
}
