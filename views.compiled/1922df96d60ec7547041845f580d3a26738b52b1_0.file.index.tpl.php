<?php
/* Smarty version 3.1.39, created on 2021-09-06 01:28:11
  from 'C:\xampp\htdocs\light-framework\views.smarty\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6135528b600878_27043208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1922df96d60ec7547041845f580d3a26738b52b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\light-framework\\views.smarty\\index.tpl',
      1 => 1630884490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
),false)) {
function content_6135528b600878_27043208 (Smarty_Internal_Template $_smarty_tpl) {
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
    <section class="flex justify-center items-center  w-full h-screen">
        <div>

            <h1 class="text-3xl p-2 md:text-5xl my-5 w-full text-center font-mono shadow-lg rounded-full">LIGHT FRAMEWORK</h1>
            <h2 class="md:text-2xl p-5 sm:p-2 text-center"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
            <div class="mt-5 flex gap-5 justify-center items-center">
                <div class="flex-col gap-10 flex md:flex-row">
                <figure>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
src/img/smarty.png">
                </figure>
                <figure>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
src/img/tailwind.svg" class="w-48">
                </figure>
                </div>
            </div>
        </div>
    </section>



</body>
<?php $_smarty_tpl->_subTemplateRender("file:components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}
