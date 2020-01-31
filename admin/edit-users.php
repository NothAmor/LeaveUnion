<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$users = getById("users", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">新增管理员</legend>
						<input name="cat" type="hidden" value="users">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>用户名</label>
							<input class="form-control" type="text" name="name" value="<?=$users['name']?>" /><br>
							
							<label>邮箱地址</label>
							<input class="form-control" type="text" name="email" value="<?=$users['email']?>" /><br>
							
							<label>管理员登录密码</label>
							<input class="form-control" type="text" name="password" value="<?=$users['password']?>" /><br>
							
							<label>此项不动</label>
							<input class="form-control" type="text" name="role" value="1" /><br>
							<br>
					<input type="submit" value=" 保存 " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				