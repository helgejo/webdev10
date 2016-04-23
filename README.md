# Assignment 10

Below is one possible (but certainly not the only) ordering of the subtasks in this assignment.

  1. Update `mysql.php` and `smarty_init.php` according to your local settings. DONE
  1. Make sure you have the `properties` table; if not, import the dump from `samples/properties.sql`. PERFORM ON UIS SERVER
  1. Styling using Bootstrap: USE BOOTSTRAP STYLE GUIDE ONLINE
    * Edit the files under `smarty/templates`.
    * Include the Bootstrap and DataTables files in `admin_header.tpl`. DONE
    * Style the login page (`admin_login.tpl`) and add the main navigation toolbar (`admin_navbar.tpl`).
  1. Property listing:
    * Complete `list_properties.php`.
    * Implement the corresponding parts in `Properties.class.php` and get them to work with DataTables.
    * The template file you'll need to edit is `admin_properties.tpl`.
  1. Add/modify property:
    * Complete input checking in `property.php`.
    * Implement the corresponding DB operations in `Properties.class.php`.
    * You'll also need to style the template file `admin_property.tpl`.
  1. Login with users from DB:
    * Complete the missing parts in `Login.class.php`.
    * The table structure is in `admins.sql`.
    * Use the `create_admin.php` code for adding an admin user.

****COPY****

  1. Property listing:
    * Complete `list_properties.php`.
    * Implement the corresponding parts in `Properties.class.php` and get them to work with DataTables.
    * The template file you'll need to edit is `admin_properties.tpl`.
  1. Add/modify property:
    * Complete input checking in `property.php`.
    * Implement the corresponding DB operations in `Properties.class.php`.
    * You'll also need to style the template file `admin_property.tpl`.
  1. Login with users from DB:
    * Complete the missing parts in `Login.class.php`.
    * The table structure is in `admins.sql`.
    * Use the `create_admin.php` code for adding an admin user.
