<?php
/**
 * Server-side script for serving data to DataTables for listing properties
 *
 * See http://datatables.net/manual/server-side
 */

require("mysql.php");

require("Login.class.php");
$login = new Login($mysqli);

session_start();

// check if the user is logged in
if ($login->isLoggedIn()) {

    require("Properties.class.php");
    $properties = new Properties($mysqli);

    // TODO prepare the data that will be used by DataTables
    $data = array(
        'draw' => (int) $_REQUEST['draw'],
        'recordsTotal' => get_count_total(),
        'recordsFiltered' => get_count_filtered(),
        'data' => get_data($start, $length, $order_by, $order_dir)
    );

    // Send back in JSON format
    echo json_encode($data);
}

// close MySQL connection
$mysqli->close();
