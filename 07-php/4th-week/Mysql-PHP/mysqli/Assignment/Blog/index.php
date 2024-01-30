<?php
require('config/db.php');

// Create Query
$query = 'SELECT * FROM posts';

// GET Result
$result = mysqli_query($conn, $query);

// Fetch data

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo '<pre>';
var_dump($posts);
echo '</pre>';

// Free Result

mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

