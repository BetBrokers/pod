<?php
/* Smarty version 3.1.33, created on 2019-09-03 13:47:17
  from 'C:\wamp64\www\lottery\application\views\layout\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6e6ee5a34ec8_17382908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b56ab074f39b5a8ab1fad0666ca607757d00293' => 
    array (
      0 => 'C:\\wamp64\\www\\lottery\\application\\views\\layout\\templates\\layout.tpl',
      1 => 1567518159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6e6ee5a34ec8_17382908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['views']->value)."/layout/configs/layout.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['views']->value)."/layout/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, true);
?>

<div class="content">
    <div style="height:100%; width:90%">
       <?php echo $_smarty_tpl->tpl_vars['controller']->value;?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['views']->value)."/layout/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
