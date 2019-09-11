<?php
/* Smarty version 3.1.33, created on 2019-09-06 17:12:49
  from 'C:\wamp64\www\lottery\application\views\wallet\deposits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7293918204e7_42255850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf7b33a223faedb19f787b12ade69eed4588f1c4' => 
    array (
      0 => 'C:\\wamp64\\www\\lottery\\application\\views\\wallet\\deposits.tpl',
      1 => 1567789899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7293918204e7_42255850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['views']->value)."/layout/configs/layout.conf", "setup", 0);
?>


<div class="content">
    <div style="height:1000px; width:90%;">
        <center>
            Address to draw 2019-09-04
            <p>
                <?php echo $_smarty_tpl->tpl_vars['addressForDeposits']->value;?>

            </p>
            <center>
                Your Deposits
            </center>
                <table border="1">
					<tr>
						<th class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Price</th>
						<th class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Awards</th>
						<th class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Reward</th>
					</tr>
					<tr>
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12">0.0035465</td>
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1</td>
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12">,mn</td>
					</tr>

                </table>
            
            <p>
                <div style="float: center; border: 1px solid #000;">
			        <img height="500" width="500" src="<?php echo $_smarty_tpl->tpl_vars['aux']->value;?>
">
		        </div>
                
            </p>
           <p>
               <form method="post" action="#">
				  <div class="form-group">
				    <label for="formSignTransactionInput">Your Bitcoin Hash Tx</label>
				    <input type="text" name="hash-tx" class="form-control" id="formSignTransactionInput" placeholder="Hash tx input">
				    <button type="submit" class="btn btn-primary">Sign Transaction to Deposit</button>
				    <?php echo $_smarty_tpl->tpl_vars['addBalance']->value;?>

				  </div>
				  
				</form>
           </p>
            
        </center>
    </div>
</div>


</div>
<?php }
}
