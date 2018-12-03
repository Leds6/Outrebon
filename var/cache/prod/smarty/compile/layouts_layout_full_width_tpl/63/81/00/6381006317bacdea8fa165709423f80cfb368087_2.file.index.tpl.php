<?php
/* Smarty version 3.1.33, created on 2018-12-03 13:17:33
  from 'C:\Laragon\www\Boucherie\prestashop\themes\child-classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c051edd588fd5_71888740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6381006317bacdea8fa165709423f80cfb368087' => 
    array (
      0 => 'C:\\Laragon\\www\\Boucherie\\prestashop\\themes\\child-classic\\templates\\index.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c051edd588fd5_71888740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15178899155c051edd57c043_06704463', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2105837905c051edd57ca62_42307316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10863757975c051edd57e588_12846666 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2429835165c051edd57d8c7_79838234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10863757975c051edd57e588_12846666', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15178899155c051edd57c043_06704463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15178899155c051edd57c043_06704463',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2105837905c051edd57ca62_42307316',
  ),
  'page_content' => 
  array (
    0 => 'Block_2429835165c051edd57d8c7_79838234',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10863757975c051edd57e588_12846666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2105837905c051edd57ca62_42307316', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2429835165c051edd57d8c7_79838234', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
