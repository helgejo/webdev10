<?php
/**
 * Login class
 */

class Login {

    private $mysqli;

    /**
     * @param $mysqli MySQLi object (connection is assumed to be opened already)
     */
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    /**
     * Checks if there is any user logged in
     *
     * @return bool
     */
    function isLoggedIn() {
        return isset($_SESSION['admin']) && strlen($_SESSION['admin']) > 0;
    }

    /**
     * Adds a user to the table
     *
     * @param $username
     * @param $password
     */
    function addUser($username, $password) {
        // TODO add username and hashed password to the admins table
    }

    /**
     * Attempt login with a given username-password combination.
     *
     * @param $username
     * @param $password
     * @return bool true if login is successful
     */
    function login($username, $password) {

        // TODO check username and password using the database
        // - use $this->mysql for talking to the database
        // - don't forget to use hashing

        if ($username == "admin" && $password == "admin") {
            $_SESSION['admin'] = $username;
            return true;
        }
        return false;
    }

    /**
     * Logout
     */
    function logout() {
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
    }

}