<?php

/**
 * Properties class
 */
class Properties {

    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    /**
     * Returns a given property
     *
     * @param $property_id
     * @return attributes of the property in an associative array
     */
    function getProperty($property_id) {
        // complete (note that you've already implemented this in Assignment 7)
        $property = array();

        // Query data
        $sql = "SELECT id, description, details, location, name, photo FROM property WHERE id =" . $property_id;
        $result = $this->_mysqli->query($sql);

        if ($result->num_rows > 0) {
            $property =$result->fetch_assoc();
//            while ($row = $result->fetch_assoc()) {
//                $property['name'] = $row['name'];
//                $property['description'] = $row['description'];
//                $property['details'] = $row['details'];
//                $property['location'] = $row['location'];
//                $property['name'] = $row['name'];
//                $property['photo'] = $row['photo'];
//            }
        }
        $result->free();
        return $property;
    }

    /**
     * Returns properties
     *
     * @return properties in an array
     */
    function listProperties($start = 0, $length = 100, $order_by = "property_id", $order_dir = "asc") {
        $properties = array();

        // TODO complete (note that you've already implemented *almost* this in Assignment 7; mind that the method now has some parameters)

        // Query data
        $sql = "SELECT id FROM property";
        $result = $this->_mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $properties[$row['id']] = $this->getProperty($row['id']);
            }
        }

        /* free result set */
        $result->free();

        return $properties;
    }

    /**
     * Updates property
     *
     * @param $property_id
     * @param $name
     * @param $location
     * @param $description
     * @param $details
     * @param $photo
     */
    function updateProperty($property_id, $name, $location, $description, $details, $photo) {
        // TODO complete
    }

    /**
     * Adds a new property
     *
     * @param $name
     * @param $location
     * @param $description
     * @param $details
     * @param $photo
     * @return mixed
     */
    function addProperty($name, $location, $description, $details, $photo) {
        // TODO complete

        // TODO return property_id of the newly inserted record
        return 0;
    }

    /**
     * Returns the total number of properties
     *
     * @return int
     */
    function countTotal() {
        // TODO return the total number of properties
        return 0;
    }

    /**
     * Returns the number of properties after filtering
     *
     * @return int
     */
    function countFiltered() {
        // for now this is the same as countTotal, as we do not support filtering
        return $this->countTotal();
    }

    /**
     * Close MySQL connection
     */
    function close() {
        $this->mysqli->close();
    }

}