<?php
    session_start();
    $id=$_SESSION['id'];

    include 'databaseFile.php';
    global $connection;
    $state=$_GET['state'];

if($state=="event"){
    $at=$_GET['at'];
    $date=$_GET['date'];
    echo $sql="DELETE FROM `reminder` WHERE id=\"$id\" AND date=\"$date\" and at=\"$at\"";
    mysqli_query($connection, $sql);
    header("location: home.php");
}
elseif ($state=="profile"){
    $profileid=$_GET['profileid'];
    $sql="DELETE FROM profileinfo WHERE profileid=\"$profileid\" AND id=\"$id\" ";
    mysqli_query($connection, $sql);
    header("location: showProfile.php");
}
elseif ($state=="contact"){
    $profileid=$_GET['profileid'];
    $sql="DELETE FROM profileinfo WHERE profileid=\"$profileid\" AND id=\"$id\" ";
    mysqli_query($connection, $sql);
    header("location: contact.php");
}
?>