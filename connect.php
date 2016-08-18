<?php

define ('DB_SERVER', "ap-cdbr-azure-east-c.cloudapp.net");
define ('DB_USERNAME', "b419ceeda1d055");
define ('DB_PASSWORD', "5b8fbe3f");
define ('DB_DATABASE', "CMM007ALDB-1405114");

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>