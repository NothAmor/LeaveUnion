# LeaveUnion
大学生活委员必备，自动生成学校每周离寝人员名单excel表格

![主页](https://i.loli.net/2020/01/31/gV4ZqJDWOIzoaSH.jpg)
![主页](https://i.loli.net/2020/01/31/aXKLCEu8cjdBFov.jpg)<br />

# 安装
1.下载整个repo，上传至网站根目录<br />

2.填写db.php中的数据库信息<br /><br />

$server = "";    //数据库服务器地址<br />
$username = "";  //数据库用户名<br />
$password = "";  //数据库密码<br />
$db_name = "excel2";   //库名<br /><br />

3.修改admin/includes目录中connect.php的数据库信息<br /><br />

$link = mysqli_connect("数据库地址", "用户名", "密码");<br />
mysqli_select_db($link, "库名"); <br /><br />

4.创建数据库<br />
创建一个库，导入database.sql文件，库名必须跟你在上面填写的两个库名一致。<br />

5.大功告成！<br /><br />

# 特别注意
每周完成后，按一下后台菜单中的开始新的一周统计，重建数据库，以免序号鬼畜。<br />
如果导出的excel文件乱码，请使用WPS，目前office会发生乱码，还在想解决方法。但是在我本地没有乱码，上传上去就乱码。

# 亮点
采用bootstrap的首页，整体简洁，轻量

# 缺点
这是本人的第一个独立完成的PHP项目，代码可能有大量冗余，后台只能实现基本的增删查改功能。后续会一点点完善。

# 修改excel样式
根目录build1.3.5和function1，3，5文件。
