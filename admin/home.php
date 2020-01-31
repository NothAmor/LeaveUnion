<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">数据表</th>
		<th class="not">条目</th>
		</tr>
		
				<tr>
					<td><a href="information1.php">1号楼离寝名单</a></td>
					<td><?=counting("information1", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="information3.php">3号楼离寝名单</a></td>
					<td><?=counting("information3", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="information5.php">5号楼离寝名单</a></td>
					<td><?=counting("information5", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">管理员列表</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			