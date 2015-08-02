<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
img{
height: 225px;
}
-->
</style>
<div class="container">
	<div class="jumbotron">
		<h1>Welcome !!</h1>    
		<a href="index.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-home"></span> Back To Home Page</a>
<center>
<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
<h3><span class="label label-primary"><B>Select Image:</B></span></h3>
<input type="file" name="image" class="ed"><br />
<h3><span class="label label-primary"><B>Caption</B></span></h3>
<input name="caption" type="text" class="ed" id="brnu" />
<br />
<input type="submit" class="btn btn-success" name="Submit" value="Upload" id="button1">
<input type="reset" class="btn btn-danger" name="Reset" value="Reset" id="button2">
</form>
</center>
</div>
</div>
<center><h2><span class="label label-success">Photo Gallery</span></h2></center>

</body>
</html>
<?php
include('config.php');
$result = mysql_query("SELECT * FROM photos");
while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}
?>