<?php
require_once("./settings/Database.php");
require_once("./settings/functions.php");
require_once("./settings/Settings.php");

$db = new Database;
$settings = new Settings($db->conn);



if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}else $page = NULL;

//imporing contactactions.php file
require_once("./pages/contactactions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title><?php echo security($settings->title); ?></title>
 <meta name="description" content="<?php echo security($settings->description); ?>">
 <meta name="keywords" content="<?php echo security($settings->keywords); ?>">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<?php

require_once("./pages/header.php");

if($page == "home")
{
    require_once("./pages/home.php");
}else if($page == "contact")
{
    require_once("./pages/contact.php");
}else if($page == "about")
{
    require_once("./pages/about.php");
}else require_once("./pages/home.php");

require_once("./pages/footer.php");
?>

</body>
</html>