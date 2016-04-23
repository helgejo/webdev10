<?php
/* Smarty version 3.1.29, created on 2016-04-23 13:30:31
  from "C:\appl\wamp64\www\helgejo-assignments\10\smarty\templates\admin_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571b78f7b3ac36_83560090',
  'file_dependency' => 
  array (
    '7cea55f4425220ab9a4d04b360e4dc98943c545a' => 
    array (
      0 => 'C:\\appl\\wamp64\\www\\helgejo-assignments\\10\\smarty\\templates\\admin_index.tpl',
      1 => 1461091361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.tpl' => 1,
    'file:admin_footer.tpl' => 1,
  ),
),false)) {
function content_571b78f7b3ac36_83560090 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Admin main page</h1>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
