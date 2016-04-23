<?php
/* Smarty version 3.1.29, created on 2016-04-23 13:27:44
  from "C:\appl\wamp64\www\helgejo-assignments\10\smarty\templates\admin_header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571b7850a87134_16371475',
  'file_dependency' => 
  array (
    'efe1730c54f9e002e853b12e7df5b22981a868a9' => 
    array (
      0 => 'C:\\appl\\wamp64\\www\\helgejo-assignments\\10\\smarty\\templates\\admin_header.tpl',
      1 => 1461418062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_navbar.tpl' => 1,
  ),
),false)) {
function content_571b7850a87134_16371475 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TODO: include Bootstrap and DataTables files -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Latest compiled JavaScript -->
    <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- DataTables with Bootstrap style-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/dt-1.10.11/datatables.min.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/t/bs/dt-1.10.11/datatables.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<p style="background-color: #ececec;">title placeholder</p>



<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php if ($_smarty_tpl->tpl_vars['msg']->value != '') {?>
<p>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value == "error_login_empty") {?>Missing username or password<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value == "error_login_invalid") {?>Invalid username or password<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value == "error_property_form") {?>The form contains errors<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value == "success_property_mod") {?>Modifications successfully saved<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value == "success_property_add") {?>New property successfully added<?php }?>
</p>
<?php }
}
}
