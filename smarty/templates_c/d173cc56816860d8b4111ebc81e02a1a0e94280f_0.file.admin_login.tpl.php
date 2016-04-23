<?php
/* Smarty version 3.1.29, created on 2016-04-23 13:22:14
  from "C:\appl\wamp64\www\helgejo-assignments\10\smarty\templates\admin_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571b7706806732_86247281',
  'file_dependency' => 
  array (
    'd173cc56816860d8b4111ebc81e02a1a0e94280f' => 
    array (
      0 => 'C:\\appl\\wamp64\\www\\helgejo-assignments\\10\\smarty\\templates\\admin_login.tpl',
      1 => 1461417278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.tpl' => 1,
    'file:admin_footer.tpl' => 1,
  ),
),false)) {
function content_571b7706806732_86247281 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container-fluid">
    <div class="row">
            <div class="alert alert-danger col-xs-offset-1 col-xs-8" role="alert">
                Invalid username and password
            </div> <!-- col -->
    </div> <!-- row -->
    <div class="row">
        <div class="col-xs-offset-1 col-xs-1">
            <h1>Login</h1>
        </div> <!-- col -->
    </div> <!-- row -->
    <div class="row">
        <form class="form-horizontal" action="admin.php" method="POST">

            <div class="form-group">
                <label for="username" class="col-xs-offset-1 col-xs-1 control-label">Username</label>
                <div class="col-xs-1">
                    <input type="text" class="form-control" name="username" id="username" size="15">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-xs-offset-1 col-xs-1 control-label">Password</label>
                <div class="col-xs-1">
                    <input type="password" class="form-control" name="password" id="password" size="15">
                </div>
            </div>

            <input type="hidden" name="page" value="login" />

            <div class="form-group">
                <div class="col-xs-offset-1 col-xs-1">
                    <button type="submit" class="btn btn-lg btn-primary btn-block" value="Login">Login</button>
                </div>
            </div>
        </form>
    </div> <!-- row -->
    <div class="row">

    </div> <!-- row -->

</div><!-- container -->


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
