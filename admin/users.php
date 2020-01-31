<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-users.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> 新增管理员</a>

				<h1>管理员列表</h1>
				<p>共有 <?php echo counting("users", "id");?> 名管理员.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>序号</th>
			<th>用户名</th>
			<th>邮箱地址</th>
			<th>密码</th>
			<th>Role</th>

				<th class="not">编辑</th>
				<th class="not">删除</th>
				</tr>
				</thead>

				<?php
				$users = getAll("users");
				if($users) foreach ($users as $userss):
					?>
					<tr>
		<td><?php echo $userss['id']?></td>
		<td><?php echo $userss['name']?></td>
		<td><?php echo $userss['email']?></td>
		<td><?php echo $userss['password']?></td>
		<td><?php echo $userss['role']?></td>


						<td><a href="edit-users.php?act=edit&id=<?php echo $userss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $userss['id']?>&cat=users" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				