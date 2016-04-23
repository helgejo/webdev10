<?php
/**
 * Booking admin
 */

require("smarty_init.inc.php");

// init session
session_start();

require("mysql.php");

require("Login.class.php");
$login = new Login($mysqli);

require("Properties.class.php");
$properties = new properties($mysqli);

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

// display message from the last operation
$msg = isset($_REQUEST['msg']) ? $_REQUEST['msg'] : "";
$smarty->assign("msg", $msg);
// reset message
$msg = "";

// login
if ($page == "login") {
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    if ($username == "" || $password == "") {
        $msg = "error_login_empty";
    } else if (!$login->login($username, $password)) {
        $msg = "error_login_invalid";
    } else {
        // successful login
    }
    // redirect to admin page and display messages if error
    header("location: admin.php?msg=" . $msg);
}

// if logged in -- admin functionality
if ($login->isLoggedIn()) {
    $smarty->assign("logged_in", 1);

    switch ($page) {
        // logout
        case "logout":
            $login->logout();
            // redirect back to login page
            header("location: admin.php");
            break;

        // property listing page
        case "properties":
            // this displays only the static parts
            // content is loaded using AJAX using list_properties.php
            $smarty->display("admin_properties.tpl");
            break;

        // add or modify property
        case "property":
            include("property.php");
            break;

        // index page
        default:
            $smarty->display("admin_index.tpl");
            break;
    }
} // if not logged in -- login screen
else {
    $smarty->assign("logged_in", 0);
    $smarty->display("admin_login.tpl");
}

// close MySQL connection
$mysqli->close();
