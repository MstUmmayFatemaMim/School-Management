<?php
require_once('../Model/alldb.php');
session_start();
if(isset($_POST['btn']))
{
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	if(empty($id || $pass))
	{
	$_SESSION['Error']="Enter Id & Pass";
	header('location: ../View/faculty.php');
	}

	$status= auth($id,$pass);
    if(mysqli_num_rows($status)==1)
    {
    	header('location: ../View/home.php');
    	$_SESSION['id']=$id;
    }
    else
    {
    	$_SESSION['Error']="Invalid User";
	    header('location: ../View/faculty.php');
    }

}

if(isset($_POST['logout']))
{
	unset($_SESSION['id']);
	header('location: ../View/faculty.php');
}


?>