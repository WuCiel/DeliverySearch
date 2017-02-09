<!DOCTYPE html>
<html>

<head>
<title>快递比价</title>
<style type="text/css">
div#container {margin: 0 auto;width:350px;height:550px;background: #a9a9a9 url(price.png) no-repeat;background-size: 350px 550px;}
td {text-align:center;width:100px;height:30px;}
p {text-align: center;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body bgcolor="whitesmoke">
  <div id="container">
<center>
<form method="post" action="price2.php" >
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
<p>起点为深大，请输入目的地：</p>
  <input type="text" name="finish" placeholder="目的地">
<input type="submit" value="查询" >
<br/>
<pre>
  请直接输入目的地的省份或直
  辖市，不需要具体到市级以下
  例如：目的地为安徽凤阳小岗
村，则只需输入 安徽
</pre>
</form>
</center>
</div>
</body>
</html>