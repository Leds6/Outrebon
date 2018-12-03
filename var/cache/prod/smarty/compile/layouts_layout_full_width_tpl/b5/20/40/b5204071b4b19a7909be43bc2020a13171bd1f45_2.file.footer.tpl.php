<?php
/* Smarty version 3.1.33, created on 2018-11-30 16:50:30
  from 'C:\Laragon\www\Boucherie\prestashop\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c015c463f09d2_81195003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5204071b4b19a7909be43bc2020a13171bd1f45' => 
    array (
      0 => 'C:\\Laragon\\www\\Boucherie\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c015c463f09d2_81195003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_790077455c015c463ecf51_07782728', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_790077455c015c463ecf51_07782728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_790077455c015c463ecf51_07782728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
