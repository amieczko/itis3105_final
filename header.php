<?php 
//require_once("../session.php");
include("session.php");


?>




<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Camp Niners</title>
  <meta name="description" content="Camp Niners">
  <meta name="author" content="SitePoint">


<!--Setup File Imports for different folders-->
<?php

#global#

#bootstrap
echo '<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">';
#font - Passion one
echo '<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">';
#footer
echo '<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">';
echo '<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">';

#global css
echo '<link rel="stylesheet" type="text/css" href="../assets/css/global.css">';
#Page Specific#
if($current_dir == "admin"){
    #admin section
    $test = "Hello";

    //admin css
    echo '<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">';
    echo '<link rel="stylesheet" type="text/css" href="../assets/css/db-edit.css">';
    //include sql stuff for admin
    
    include("db/user_sql.php");
    include("db/event_sql.php");
    
}
else if($current_dir == "user"){
    #user section
    
    //user css
    echo '<link rel="stylesheet" type="text/css" href="../assets/css/user.css">';
    
    //user home
    echo '<link rel="stylesheet" type="text/css" href="../assets/css/table.css">';
    //include sql stuff for user
    include("db/user_sql.php");
    include("db/event_sql.php");


}
else if($current_dir == "site"){
    #site section

    //include css
    echo '<link rel="stylesheet" type="text/css" href="../assets/css/site.css">';
}

?>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>