<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My tour</title>
</head>

<body>
<?php
$cn=mysqli_connect("localhost","awaazsup_rahul","tC^hTy.QEd4m","awaazsup_travel");
// $s="select * from advertisement";
$result= mysqli_query($cn,"select * from advertisement");
// $r=mysqli_num_rows($result);

//echo $r;

while($data=mysqli_fetch_array($result))
{
	?>
	<div class="col-md-3 image-grid">
					 <img src="Admin/addverimages/<?php echo $data[3]; ?>"  >
					
					 <p><a href="#"><?php echo $data[2]; ?></a></p>
				 </div>
				
		
<?php
}
mysqli_close($cn);
?>
</body>
</html>