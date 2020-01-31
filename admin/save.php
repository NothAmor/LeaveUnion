<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "information1" || $cat_get == "information1"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$phone = mysqli_real_escape_string($link,$_POST["phone"]);
$building = mysqli_real_escape_string($link,$_POST["building"]);
$chamber = mysqli_real_escape_string($link,$_POST["chamber"]);
$fname = mysqli_real_escape_string($link,$_POST["fname"]);
$fri_yn = mysqli_real_escape_string($link,$_POST["fri_yn"]);
$sat_yn = mysqli_real_escape_string($link,$_POST["sat_yn"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `information1` (  `name` , `phone` , `building` , `chamber` , `fname` , `fri_yn` , `sat_yn` ) VALUES ( '".$name."' , '".$phone."' , '".$building."' , '".$chamber."' , '".$fname."' , '".$fri_yn."' , '".$sat_yn."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `information1` SET  `name` =  '".$name."' , `phone` =  '".$phone."' , `building` =  '".$building."' , `chamber` =  '".$chamber."' , `fname` =  '".$fname."' , `fri_yn` =  '".$fri_yn."' , `sat_yn` =  '".$sat_yn."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `information1` WHERE id = '".$id_get."' ");
					}
					header("location:"."information1.php");
				}
				
				if($cat == "information3" || $cat_get == "information3"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$phone = mysqli_real_escape_string($link,$_POST["phone"]);
$building = mysqli_real_escape_string($link,$_POST["building"]);
$chamber = mysqli_real_escape_string($link,$_POST["chamber"]);
$fname = mysqli_real_escape_string($link,$_POST["fname"]);
$fri_yn = mysqli_real_escape_string($link,$_POST["fri_yn"]);
$sat_yn = mysqli_real_escape_string($link,$_POST["sat_yn"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `information3` (  `name` , `phone` , `building` , `chamber` , `fname` , `fri_yn` , `sat_yn` ) VALUES ( '".$name."' , '".$phone."' , '".$building."' , '".$chamber."' , '".$fname."' , '".$fri_yn."' , '".$sat_yn."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `information3` SET  `name` =  '".$name."' , `phone` =  '".$phone."' , `building` =  '".$building."' , `chamber` =  '".$chamber."' , `fname` =  '".$fname."' , `fri_yn` =  '".$fri_yn."' , `sat_yn` =  '".$sat_yn."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `information3` WHERE id = '".$id_get."' ");
					}
					header("location:"."information3.php");
				}
				
				if($cat == "information5" || $cat_get == "information5"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$phone = mysqli_real_escape_string($link,$_POST["phone"]);
$building = mysqli_real_escape_string($link,$_POST["building"]);
$chamber = mysqli_real_escape_string($link,$_POST["chamber"]);
$fname = mysqli_real_escape_string($link,$_POST["fname"]);
$fri_yn = mysqli_real_escape_string($link,$_POST["fri_yn"]);
$sat_yn = mysqli_real_escape_string($link,$_POST["sat_yn"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `information5` (  `name` , `phone` , `building` , `chamber` , `fname` , `fri_yn` , `sat_yn` ) VALUES ( '".$name."' , '".$phone."' , '".$building."' , '".$chamber."' , '".$fname."' , '".$fri_yn."' , '".$sat_yn."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `information5` SET  `name` =  '".$name."' , `phone` =  '".$phone."' , `building` =  '".$building."' , `chamber` =  '".$chamber."' , `fname` =  '".$fname."' , `fri_yn` =  '".$fri_yn."' , `sat_yn` =  '".$sat_yn."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `information5` WHERE id = '".$id_get."' ");
					}
					header("location:"."information5.php");
				}
				
				if($cat == "users" || $cat_get == "users"){
					$name = mysqli_real_escape_string($link,$_POST["name"]);
$email = mysqli_real_escape_string($link,$_POST["email"]);
$password = mysqli_real_escape_string($link,$_POST["password"]);
$role = mysqli_real_escape_string($link,$_POST["role"]);


				if($act == "add"){
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit"){
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 	
					}elseif ($act_get == "delete"){
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>