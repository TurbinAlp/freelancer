<?php
session_start();

$_SESSION = [];

session_destroy();

header("location: index.html");
exit();

?>