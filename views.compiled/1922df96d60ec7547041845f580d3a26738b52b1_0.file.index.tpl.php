<?php
/* Smarty version 3.1.39, created on 2021-09-06 00:53:51
  from 'C:\xampp\htdocs\light-framework\views.smarty\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61354a7f2ba4f7_73469456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1922df96d60ec7547041845f580d3a26738b52b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\light-framework\\views.smarty\\index.tpl',
      1 => 1630882065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
),false)) {
function content_61354a7f2ba4f7_73469456 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php $_smarty_tpl->_subTemplateRender("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
    <h1 class="w-full"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h1>
    

</body>
<?php $_smarty_tpl->_subTemplateRender("file:components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
