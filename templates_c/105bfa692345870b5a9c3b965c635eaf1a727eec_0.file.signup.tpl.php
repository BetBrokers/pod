<?php
/* Smarty version 3.1.33, created on 2019-09-05 20:15:31
  from 'C:\wamp64\www\lottery\application\views\profile\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d716ce3712fa9_36293401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '105bfa692345870b5a9c3b965c635eaf1a727eec' => 
    array (
      0 => 'C:\\wamp64\\www\\lottery\\application\\views\\profile\\signup.tpl',
      1 => 1567714416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d716ce3712fa9_36293401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['views']->value)."/layout/configs/layout.conf", "setup", 0);
?>


<div class="content">
    <div style="height:1000px; width:90%;">
        <center>
            
            <p>
                <table width="100%" border="1px">
					  <tr>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%" height="20%">Nickname</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Value</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Ticket</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="70%">Hash Tx</td>
					  </tr>
					  
                </table>
	            <div class="card text-white bg-success mb-3" style="max-width: 200rem;">
				    <div class="card-header">Generate Encrypted Profile</div>
				    <div class="card-body">
				        <h5 class="card-title">Success, your key to login on Lottobits</h5>
				        <p class="card-text"><textarea style="width:90%; height:200px;" readonly><?php echo $_smarty_tpl->tpl_vars['generateProfile']->value;?>
</textarea></p>
				    </div>
				</div>
           
            </p>
        </center>
    </div>
   </div>
</div>
<?php }
}
