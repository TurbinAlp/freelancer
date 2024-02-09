<?php

// SQL query to fetch data from the categories table
$sqlCat = "SELECT categoryid, categoryname FROM categories";

// Execute the query
$resultCat = $conn->query($sqlCat);

?>