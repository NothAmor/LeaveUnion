<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit"){
					$id = $_GET['id'];
					$information5 = getById("information5", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">添加五号楼离寝人员</legend>
						<input name="cat" type="hidden" value="information5">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>姓名</label>
							<input class="form-control" type="text" name="name" value="<?=$information5['name']?>" /><br>
							
							<label>联系方式</label>
							<input class="form-control" type="text" name="phone" value="<?=$information5['phone']?>" /><br>
							
							<label>所属公寓楼</label>
							<input class="form-control" type="text" name="building" value="5" /><br>
							
							<label>寝室号</label>
							<input class="form-control" type="text" name="chamber" value="<?=$information5['chamber']?>" /><br>
							
							<label>辅导员姓名</label>
							<input class="form-control" type="text" name="fname" value="<?=$information5['fname']?>" /><br>
							
							<label>周五是否离寝</label>
							<input class="form-control" type="text" name="fri_yn" value="<?=$information5['fri_yn']?>" /><br>
							
							<label>周六是否离寝</label>
							<input class="form-control" type="text" name="sat_yn" value="<?=$information5['sat_yn']?>" /><br>
							<br>
					<input type="submit" value=" 保存 " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				