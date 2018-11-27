<?php
/* Smarty version 3.1.33, created on 2018-11-27 16:29:01
  from 'C:\Laragon\www\Boucherie\prestashop\admin085cxiqye\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfd62bdece108_16541904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98b663688342b8c31704fd601126fa38146b8cd' => 
    array (
      0 => 'C:\\Laragon\\www\\Boucherie\\prestashop\\admin085cxiqye\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfd62bdece108_16541904 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
