<?php 
session_start();
require('config.php');
$id=$_REQUEST['project_id'];
$title=$_REQUEST['own_title'];
$estimated=$_REQUEST['estimated'];
mysqli_query($con,"insert into tasks(project_id) values($id)");
$last_id=mysqli_insert_id($con);
mysqli_query($con,"insert into task_rows(task_id,title,team_id,created_by,estimated_hrs) values($last_id,'$title',".$_SESSION['u_id'].",".$_SESSION['u_id'].",$estimated)");
header("location:project_detailes.php?id=$id&added=1");
 ?>