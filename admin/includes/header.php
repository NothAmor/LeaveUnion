<?php
		error_reporting(0);
		session_start();
		if ($_COOKIE["auth"] != "admin_in"){header("location:"."./");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>离寝人员管理系统</title>
	
				<!-- Latest compiled and minified CSS -->
				<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
				
				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
					
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							离寝人员管理系统<br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							Excel<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
						
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								管理主页
							</a>
						</li>
<li><a href="../../clear.php"> <i class="glyphicon glyphicon-sound-dolby"></i>开始新的一周统计（每周结束后必须点</a></li>
			<li><a href="information1.php"> <i class="glyphicon glyphicon-facetime-video"></i>1号楼离寝名单 <span class="pull-right"><?=counting("information1", "id")?></span></a></li>
<li><a href="information3.php"> <i class="glyphicon glyphicon-sound-dolby"></i>3号楼离寝名单 <span class="pull-right"><?=counting("information3", "id")?></span></a></li>
<li><a href="information5.php"> <i class="glyphicon glyphicon-download"></i>5号楼离寝名单 <span class="pull-right"><?=counting("information5", "id")?></span></a></li>
<li><a href="users.php"> <i class="glyphicon glyphicon-open-file"></i>管理员列表 <span class="pull-right"><?=counting("users", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> 注销登录</a></li>
				</ul>
				
				<div class="visit">
					<p class="text-center">Created with &hearts;</p>
					<a href="https://www.nothamor.cn" target="_blank" >访问制作人博客</a>
				</div>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">