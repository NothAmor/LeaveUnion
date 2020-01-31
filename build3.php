<?php
require_once("db.php");
$connect = mysqli_connect($server, $username, $password, $db_name);
$sql = "SELECT * FROM information3";  
$result = mysqli_query($connect, $sql);
?>

<html>  
 <head>  
  <title>导出离寝人员到excel</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">三号楼离寝人员名单，请使用WPS</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>序号</th>
                         <th>名字</th>  
                         <th>联系方式</th>  
                         <th>所属公寓</th>  
                         <th>寝室号</th>
                         <th>辅导员</th>
                         <th>周五</th>
                         <th>备注</th>
                         <th>周六</th>
                         <th>备注</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["id"].'</td>
         <td>'.$row["name"].'</td>  
         <td>'.$row["phone"].'</td>  
         <td>'.$row["building"].'号楼</td>  
         <td>'.$row["chamber"].'</td>  
         <td>'.$row["fname"].'</td>
         <td>'.$row["fri_yn"].'</td>
        <td></td>
         <td>'.$row["sat_yn"].'</td>
        <td></td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="function3.php">
     <input type="submit" name="export" class="btn btn-success" value="生成并下载" />
    </form>
   </div>  
  </div>  
 </body>  
</html>