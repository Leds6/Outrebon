<?php
/* Smarty version 3.1.33, created on 2018-11-27 16:29:02
  from 'C:\Laragon\www\Boucherie\prestashop\admin085cxiqye\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfd62be076c49_49704294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd85ee53bdc5348ecf2330d3a31487aa70e0f6ac6' => 
    array (
      0 => 'C:\\Laragon\\www\\Boucherie\\prestashop\\admin085cxiqye\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfd62be076c49_49704294 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}