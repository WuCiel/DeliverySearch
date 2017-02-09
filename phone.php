<!DOCTYPE html>
<html>

<head>
<title>快递比价</title>
<style type="text/css">
div#container {margin: 0 auto;width:350px;background-color: rgb(229,214,221);/>}
td {text-align:center;width:auto; height:auto;}
caption {font-size: 30px;}
h1 {font-size: 50px;margin-bottom: 0;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body bgcolor="whitesmoke">
  <div id="container">
<center>
     <h1>快递电话本</h1>
<?php
//header("content-Type: text/html; charset=utf-8");
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
  {
     die('Could not connect: ' . mysql_error());
  }

mysql_select_db("app_myhello12580", $con);
mysql_query("set names 'utf8'");

$result = mysql_query("SELECT * FROM phone ") or die(mysql_error());
echo "<br/>";
echo "<br/>";

echo "<table border='1' >
<caption><b>快递公司联系方式</b></caption>
<tr>
<th>快递公司</th>
<th>联系人</th>
<th>电话</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" .$row['kuaidigongsi'] . "</td>";
  echo "<td>" . $row['lianxiren'] . "</td>";
    echo "<td>" . $row['dianhua'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br/>";

mysql_close($con);
?>
</center>

</div>
</body>
</html>