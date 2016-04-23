<?php
/**
 * Admin add or modify property
 */

$property_id = isset($_REQUEST['property_id']) ? $_REQUEST['property_id'] : 0;
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
$errors = array();

// form is submitted
if ($action == "do") {
    // load input
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $location = isset($_POST['location']) ? $_POST['location'] : "";
    $description = isset($_POST['description']) ? $_POST['description'] : "";
    $details = isset($_POST['details']) ? $_POST['details'] : "";
    $photo = isset($_POST['photo']) ? $_POST['photo'] : "";

    // Input checking
    if (strlen($name) == 0) {
        $errors['name'] = "Name cannot be empty!";
    }
    // TODO complete input checking

    // no error
    if (count($errors) == 0) {
        // modify product
        if ($property_id > 0) {
            $properties->updateProperty($property_id, $name, $location, $description, $details, $photo);
            $msg = "success_property_mod";
        } // add new product
        else {
            // add product to DB and product_id to the id of the newly added product
            $property_id = $properties->addProperty($name, $location, $description, $details, $photo);
            $msg = "success_property_add";
        }
    }
    else {
        $msg = "error_property_form";
    }

}
// form is displayed for the first time (not submitted)
else {
    $property = $properties->getProperty($property_id);
    if (empty($property)) { // initialize variables if the property doesn't exist
        $name = "";
        $location = "";
        $description = "";
        $details = "";
        $photo = "";
    }
    else { // if the property can be loaded from the DB
        $name = $property['name'];
        $location = $property['location'];
        $description = $property['description'];
        $details = $property['details'];
        $photo = $property['photo'];
    }
}

// displaying the form
$smarty->assign(array(
    "msg" => $msg,
    "errors" => $errors,
    "property_id" => $property_id,
    "name" => $name,
    "location" => $location,
    "description" => $description,
    "details" => $details,
    "photo" => $photo
));
$smarty->display("admin_property.tpl");
