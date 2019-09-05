<?php
/* Smarty version 3.1.33, created on 2019-09-04 19:10:00
  from 'C:\wamp64\www\lottery\application\views\games\lottery\play.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d700c0812dda1_16289835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34715a67050933f4189e52b88ca83f183f3d7cb1' => 
    array (
      0 => 'C:\\wamp64\\www\\lottery\\application\\views\\games\\lottery\\play.tpl',
      1 => 1567624102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d700c0812dda1_16289835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['views']->value)."/layout/configs/layout.conf", "setup", 0);
?>


<div class="content">
    <div style="height:1000px; width:90%;">
        <center>
            Address to draw 2019-09-04
            <p>
                <?php echo $_smarty_tpl->tpl_vars['addressForBuyTicket']->value;?>

            </p>
            <center>
                Informations
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
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_smarty_tpl->tpl_vars['reward']->value;?>
</td>
					</tr>

                </table>
            </p>
            <p>
                <div style="float: left; border: 1px solid #000;">
			        <img height="500" width="500" src="<?php echo $_smarty_tpl->tpl_vars['aux']->value;?>
">
		        </div>
                
            </p>
           
            <table width="100%" border="1px">
					  <tr>
					    <td height="20%"><strong>Currently Bets</strong></td>
					  </tr>
					  
                </table>
            
            <p>
                <table width="100%" border="1px">
					  <tr>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%" height="20%">Nickname</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Value</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Ticket</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="70%">Hash Tx</td>
					  </tr>
					  <?php echo $_smarty_tpl->tpl_vars['latestBets']->value;?>

                </table>
            </p>
        </center>
    </div>
</div>


</div>
<?php }
}
