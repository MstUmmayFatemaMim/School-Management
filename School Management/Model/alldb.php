<?php
require_once('db.php');
  
function auth($id,$pass)
{
	$conn=con();
	$sql="select * from sm where Id='$id' and Pass='$pass'";
	$res=mysqli_query($conn,$sql);
	return $res;
}
function data()
{
	$conn=con();
	$sql1="select * from sm";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}

function delete($id)
{
	$conn=con();
	$sql2="delete from sm where id='$id'";
	$res2=mysqli_query($conn,$sql2);
	return $res2;
}

function edit($id1)
{
	$conn=con();
	$sql2="select * from sm where id='$id1'";
	$edit=mysqli_query($conn,$sql2);
	return $edit;

}
function update($id,$name,$notice,$pass)
{
	$conn=con();
	$sql2="update ab set Name='$name', Notice='$notice', Pass='$pass' where Id='$id'";
	$update=mysqli_query($conn,$sql2);
	return $update;
}