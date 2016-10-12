<?php include 'banner.php';?>
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
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="sidebar-nav">
				<div class="panel panel-success">
				
			  		<div class="panel-heading">Login Information</div>
					   <div class="panel-body">	
							<div class="col-xs-12 col-sm-12">
							 <span class="glyphicon glyphicon-user"> </span> <label><?Php echo $_SESSION['ACCOUNT_NAME'];?></label><br/>
							 <span class="glyphicon glyphicon-cog"> </span> <label><?Php echo $_SESSION['ACCOUNT_TYPE'];?></label><br/>
							  <a href="logout.php" class="btn btn-default">Logout <span class="glyphicon glyphicon-log-out"></span></a>
							</div>					            					            		
						</div>
					          
				</div>
			</div>
		</div>
	</div>
<!--/.well --> 
</div><!--container-->
	
