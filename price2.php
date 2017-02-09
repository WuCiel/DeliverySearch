<!DOCTYPE html>
<html>

<head>
<title>快递比价</title>
<style type="text/css">
div#container {margin: 0 auto;width:auto;height:auto;background: #dcdcdc url(price.png) no-repeat;background-size: 100% 100%;/>
}
td {text-align:center; width:auto; height:auto; }
caption {font-size: 20px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body bgcolor="whitesmoke">
  <div id="container">
<center>
<?php
//header("content-Type: text/html; charset=utf-8");
$name = $_POST['finish']; 
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("app_myhello12580", $con);
mysql_query("set names 'utf8'");

$result = mysql_query("SELECT * FROM yunda where mudidi='$name' ");
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";


echo "<table border='1'>
<caption ><b>韵达快递</b></caption>
<tr>
<th>目的地</th>
<th>陆运首重</th>
<th>陆运续重</th>
<th>时效</th>
<th>备注</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" .$row['mudidi'] . "</td>";
  echo "<td>" . $row['lushou'] . "</td>";
  echo "<td>" . $row['luxu'] . "</td>";
  echo "<td>" . $row['shixiao'] . "</td>";
  echo "<td>" . $row['beizhu'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br/>";

//////////////////////////////////////

$result = mysql_query("SELECT * FROM tiantian where mudidi='$name' ");

echo "<table border='1'>
<caption><b>天天快递</b></caption>
<tr>
<th>目的地</th>
<th>陆运首重</th>
<th>陆运续重</th>
<th>时效</th>
<th>备注</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" .$row['mudidi'] . "</td>";
  echo "<td>" . $row['lushou'] . "</td>";
  echo "<td>" . $row['luxu'] . "</td>";
  echo "<td>" . $row['shixiao'] . "</td>";
  echo "<td>" . $row['beizhu'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br/>";

///////////////////////////////////////

$result = mysql_query("SELECT * FROM stytzt where mudidi='$name' ");

echo "<table border='1'>
<caption><b>申通/圆通/中通</b></caption>
<tr>
<th>目的地</th>
<th>陆运首重</th>
<th>陆运续重</th>
<th>时效</th>
<th>备注</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" .$row['mudidi'] . "</td>";
  echo "<td>" . $row['lushou'] . "</td>";
  echo "<td>" . $row['luxu'] . "</td>";
  echo "<td>" . $row['shixiao'] . "</td>";
  echo "<td>" . $row['beizhu'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br/>";
/////////////////////

$result = mysql_query("SELECT * FROM baishi where mudidi='$name' ");

echo "<table border='1'>
<caption><b>百世汇通</b></caption>
<tr>
<th>目的地</th>
<th>陆运首重</th>
<th>陆运续重</th>
<th>时效</th>
<th>备注</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" .$row['mudidi'] . "</td>";
  echo "<td>" . $row['lushou'] . "</td>";
  echo "<td>" . $row['luxu'] . "</td>";
  echo "<td>" . $row['shixiao'] . "</td>";
  echo "<td>" . $row['beizhu'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br/>";
/////////////////////////////////

$result = mysql_query("SELECT * FROM shunfeng where mudidi='$name' ");

echo "<table border='1'>
<caption><b>顺丰快递</b></caption>
<tr>
<th>目的地</th>
<th>标快首重</th>
<th>陆运续重</th>
<th>时效</th>
<th>备注</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" .$row['mudidi'] . "</td>";
  echo "<td>" . $row['lushou'] . "</td>";
  echo "<td>" . $row['luxu'] . "</td>";
  echo "<td>" . $row['shixiao'] . "</td>";
  echo "<td>" . $row['beizhu'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br/>";

////////////////////
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
mysql_close($con);
?>
</center>

</div>
</body>
</html>