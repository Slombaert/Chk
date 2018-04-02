<?php

include('../app/parameters.php');

/* Try to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* Checking db connection */
if (!$db) {
    die("ERROR: Could not connect . " . mysqli_connect_error());
}

/* Setting UTF8 for accent */
$db->query("SET NAMES 'utf8'");

/* Read all person from db */
$sqlQueryContact = "SELECT civility, lastname, firstname FROM contact AS co JOIN civility AS ci ON co.civility_id = ci.id";
$result = $db->query($sqlQueryContact);


