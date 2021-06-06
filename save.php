<?php
include 'config.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$stock=$_POST['stock'];
		$category=$_POST['category'];
		$sql = "INSERT INTO product VALUES ('$id','$name','$stock','$category')";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$stock=$_POST['stock'];
		$category=$_POST['category'];
		$sql = "update product set 
				name='$name', 
				stock='$stock', 
				category='$category' 
				WHERE id='$id'";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM product WHERE id='$id'";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}

if(count($_POST)>0){
	if($_POST['type']==4){
		$user=$_POST['user'];
		$password = $_POST['password'];
		$sql = "INSERT INTO admin (user, password) VALUES ('$user','$password')";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==5){
		$id=$_POST['id'];
		$user=$_POST['user'];
		$password=$_POST['password'];
		$sql = "update admin set 
				user='$user', 
				password = '$password'
				WHERE id='$id'";
		if (mysqli_query($con, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
if(count($_POST)>0){
	if($_POST['type']==6){
		$id=$_POST['id'];
		$sql = "DELETE FROM admin WHERE id='$id'";
		if (mysqli_query($con, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	}
}
?>