<?php
/* Smarty version 3.1.29, created on 2016-04-23 13:27:44
  from "C:\appl\wamp64\www\helgejo-assignments\10\smarty\templates\admin_navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571b7850add036_46349847',
  'file_dependency' => 
  array (
    '2b6386a48ba513d8c4a2c8ce384cc11e99c06f04' => 
    array (
      0 => 'C:\\appl\\wamp64\\www\\helgejo-assignments\\10\\smarty\\templates\\admin_navbar.tpl',
      1 => 1461418062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571b7850add036_46349847 ($_smarty_tpl) {
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="admin.php">Booking admin</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.php?page=properties">Properties</a></li>
                <li><a href="admin.php?page=logout">Logout</a></li>
            </ul>
        </div>
    </div>

</nav>
<?php }
}
