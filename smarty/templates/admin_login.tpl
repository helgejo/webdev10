{include file="admin_header.tpl"}


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


{include file="admin_footer.tpl"}
