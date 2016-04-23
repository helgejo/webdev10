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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- DataTables with Bootstrap style-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/dt-1.10.11/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/t/bs/dt-1.10.11/datatables.min.js"></script>
</head>
<body>

<p style="background-color: #ececec;">title placeholder</p>

{* navbar only when the admin is logged in *}
{* Remove comment after navbar done
{if $logged_in}
    {include file="admin_navbar.tpl"}
{/if}
 *}
{include file="admin_navbar.tpl"}

{* success/error messages *}
{if $msg != ""}
<p>
    {if $msg == "error_login_empty"}Missing username or password{/if}
    {if $msg == "error_login_invalid"}Invalid username or password{/if}
    {if $msg == "error_property_form"}The form contains errors{/if}
    {if $msg == "success_property_mod"}Modifications successfully saved{/if}
    {if $msg == "success_property_add"}New property successfully added{/if}
</p>
{/if}