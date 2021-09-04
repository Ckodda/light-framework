<?php
/* Smarty version 3.1.39, created on 2021-09-04 20:21:09
  from 'C:\xampp\htdocs\light-framework\views.smarty\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6133b915b15980_03851710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70bb9b2b1715250133ee4b09f300b0d940e416c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\light-framework\\views.smarty\\users.tpl',
      1 => 1630779668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6133b915b15980_03851710 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
  <h3>
    Name : <?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>

  </h3>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
