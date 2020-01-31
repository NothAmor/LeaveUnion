<?php
		$link = mysqli_connect("数据库服务器", "数据库用户名", "数据库密码");
		mysqli_select_db($link, "数据库名");  
		mysqli_query($link, "SET CHARACTER SET utf8");
		?>
		