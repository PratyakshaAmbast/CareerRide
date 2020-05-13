<?php

$conn = mysqli_connect("localhost","root","","youtubeuserinfo");

if(isset($_POST['btnSubmit']))
{
		$txtEmail = $_POST['txtEmail'];
		$txtPass = $_POST['txtPass'];
		
		$query = "select * from loginn where email='{$txtEmail}' and password='{$txtPass}'";
		$result = mysqli_query($conn,$query);
		
		
		if($res=mysqli_fetch_array($result))
		{
			echo "<a href='index.php'>Click ere To Proceed</a>";
		}
		else
		{
			echo "<script>alert(\"Login unsuccessful\");</script>";
		}
}
		

?>





<!DOCTYPE html>
<html>
<head>
	<title>CareerRide</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styling.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

 
</head>

<style>
body {
  background-image: url('http://localhost/youtubewebsite/images/careerr.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<body >

<div class="container">
	<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4" style="padding-top: 100px;">
			<form action="loginn.php" method="post" id="captcha-code">
			
			
			<div class = "panel panel-success">
				<div class="panel-heading">
					LOGIN
				</div>
				<div class="panel-body">
					<div class="form-group">
					<label>Email</label>
					<input type="text" name="txtEmail" class="form-control">
					</div>
					
					<div class="form-group">
					<label>Password</label>
					<input type="password" name="txtPass" class="form-control">
					</div>
					
				
					
					<div class="form-group">
					
					<input type="submit" name="btnSubmit" class="form-control btn btn-success">
					</div>
				
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>



<script>
 $(document).ready(function(){
  
  $('#captch_form').on('submit', function(event){
   event.preventDefault();
   if($('#captcha_code').val() == '')
   {
    alert('Enter Captcha Code');
    $('#register').attr('disabled', 'disabled');
    return false;
   }
   else
   {
    alert('Form has been validate with Captcha Code');
    $('#captch_form')[0].reset();
    $('#captcha_image').attr('src', 'image.php');
   }
  });

  $('#captcha_code').on('blur', function(){
   var code = $('#captcha_code').val();
   
   if(code == '')
   {
    alert('Enter Captcha Code');
    $('#register').attr('disabled', 'disabled');
   }
   else
   {
    $.ajax({
     url:"check_code.php",
     method:"POST",
     data:{code:code},
     success:function(data)
     {
      if(data == 'success')
      {
       $('#register').attr('disabled', false);
      }
      else
      {
       $('#register').attr('disabled', 'disabled');
       alert('Invalid Code');
      }
     }
    });
   }
  });

 });
</script>