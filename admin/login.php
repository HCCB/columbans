
<?php require_once("../includes/initialize.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>HCCB Student Information and Grading System</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'> 
<!-- Custom styles for this template -->
<link href="<?php echo WEB_ROOT; ?>css/offcanvas.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>css/style.css" rel="stylesheet">
  <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
</head>
<body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">HCCB Student Information and Grading System</a>
        </div>

       
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    </div>
<?php
 if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
include("banner.php") ?>

<?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['pass']);
    
    $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $upass == '') {
?>    <script type="text/javascript">
                alert("Invalid Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new User();
		//make use of the static function, and we passed to parameters
		$res = $user::AuthenticateUser($uname, $h_upass);
		//then it check if the function return to true
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "index.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>

<div class="container">
		
		<div class="col-xs-12 col-sm-9">
			<div class="rows">
				<div class="well">
					<fieldset>
						<legend><h4 class="text-center">VISION</h4></legend>
							<p style="text-align: justify; text-indent: .5in;">The Holy Child Colleges 
						of Butuan provides an alternative educational opportunity for the deserving
						but underserved sectors blending technology with humanities in courses that 
						will alleviate poverty and improve their quality of life while at the same time
						responding to global needs and requirements for skilled human resource with 
						passion for service and excellence.</p>
				</fieldset>	
				<fieldset>
					<legend><h4 class="text-center">MISSION</h4></legend>
						<p style="text-align: justify; text-indent: .5in;">The Holy Child Colleges of
						Butuan is committed to:</p>
						<p style="text-align: justify; text-indent: .5in;">Provide a humanistic technological educational service to the deserving but 
						underserved sectors of the society. Foster the value of excellence, integrity
						and leadership among students as exemplars of Filipino culture and tradition. </p>
				</fieldset>	

					
				</div>
			</div>
		</div>
		<!--/span--> 
		<?php include("sidebar.php") ?>
		</div>
	<!--/row-->
	
	<hr>
	
