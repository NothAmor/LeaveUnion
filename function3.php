<?php  
error_reporting(E_ALL || ~E_NOTICE);
require_once("db.php");

$connect = mysqli_connect($server, $username, $password, $db_name);
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM information3";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
    <tr>
        <td colspan="10">移通/软件两专业周末离寝人员汇总表</td>
    </tr>
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
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  $str = mb_convert_encoding($str, "UTF-8", "GBK");
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=3.xls');
  echo $output;
 }
}
?>