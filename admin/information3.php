<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-information3.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> 添加三号楼离寝人员</a>
<a class="btn btn-primary" href="/build3.php"> <i class="glyphicon glyphicon-plus-sign"></i> 生成三号楼excel表格</a>

				<h1>三号楼离寝名单</h1>
				<p>有 <?php echo counting("information3", "id");?> 人离寝.</p>

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
				$information3 = getAll("information3");
				if($information3) foreach ($information3 as $information3s):
					?>
					<tr>
		<td><?php echo $information3s['id']?></td>
		<td><?php echo $information3s['name']?></td>
		<td><?php echo $information3s['phone']?></td>
		<td><?php echo $information3s['building']?></td>
		<td><?php echo $information3s['chamber']?></td>
		<td><?php echo $information3s['fname']?></td>
		<td><?php echo $information3s['fri_yn']?></td>
		<td><?php echo $information3s['sat_yn']?></td>


						<td><a href="edit-information3.php?act=edit&id=<?php echo $information3s['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $information3s['id']?>&cat=information3" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				