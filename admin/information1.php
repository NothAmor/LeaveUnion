<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-information1.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> 添加一号楼离寝名单</a>
				<a class="btn btn-primary" href="/build1.php"> <i class="glyphicon glyphicon-plus-sign"></i> 生成一号楼excel表格</a>

				<h1>一号楼离寝名单</h1>
				<p>有 <?php echo counting("information1", "id");?> 人离寝.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>序号</th>
			<th>姓名</th>
			<th>联系方式</th>
			<th>所属公寓楼</th>
			<th>寝室号</th>
			<th>辅导员姓名</th>
			<th>周五是否离寝</th>
			<th>周六是否离寝</th>

				<th class="not">编辑</th>
				<th class="not">删除</th>
				</tr>
				</thead>

				<?php
				$information1 = getAll("information1");
				if($information1) foreach ($information1 as $information1s):
					?>
					<tr>
		<td><?php echo $information1s['id']?></td>
		<td><?php echo $information1s['name']?></td>
		<td><?php echo $information1s['phone']?></td>
		<td><?php echo $information1s['building']?></td>
		<td><?php echo $information1s['chamber']?></td>
		<td><?php echo $information1s['fname']?></td>
		<td><?php echo $information1s['fri_yn']?></td>
		<td><?php echo $information1s['sat_yn']?></td>


						<td><a href="edit-information1.php?act=edit&id=<?php echo $information1s['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $information1s['id']?>&cat=information1" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				