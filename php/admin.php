<?php
  include "hder.inc";
 //include "home.inc";
?>	
				<!-- start of the navigator-->
				 <div id ="navheader">
							<ul id="navmenu">
								<li id ="subm1"><a href ="index.php">Home</a></li>
								<li id ="subm1"><a href ="profile.php">Zanzibar Profile</a></li>
								<li id ="subm1"><a href ="#">Sectoral Statistics</a><span class ="darrow">&#9660;</span>
									<ul class ="subnav1">
										<li><a href ="sector_social.php">Social</a></li>
										<li><a href ="sector_economic.php">Economic</a></li>
										<li><a href ="sector.php">Other</a></li>
									</ul>
								</li>
								<li id ="subm1"><a href ="zanstat.php">Data Portal</a><span class ="darrow">&#9660;</span>
									<ul class ="subnav1">
										<li><a href ="zanstat.php">ZANSTAT</a></li>
									<li><a href="http://www.ocgs.go.tz/Nada4/index.php/catalog" target="_blank">NADA</a></li>
									</ul>
								</li>
								<li id ="subm1"><a href ="census.php">Census & Survey </a>
								</li>
								<li id ="subm1"><a href ="publication.php">Publication</a></li>
								
							</ul>	
				 </div><!-- End of the navigator main section -->
				 
				<?php include 'slide.php'?>
	</div>
		<!-- eND of the header-->
		
		<!-- start of the main-->
			<div id ="mainnavfrm">
			        
					<div class ="home1fad">
							<h4>ADIMINISTRASTION</h4>
							<form action="php/adminlogin.php" method ="post">
									<label for="fname">Username</label>
										<input type="text" id="fnamef" placeholder="username" name="username1"><br />

									<label for="lname">Password</label>
										<input type="password" id="lnamef" placeholder="password" name="password"><br />
									<input type="submit" value="Login"><br />	
							</form>
						
						<div id="lnkfrm">
							<i><a href ="#" class = "forgetf" style="color:red;">This section is only for system admin officer</a></i>
						</div>
					</div>
		</div>
		<!-- eND of the main-->
<?php
  include "fter.inc";
 //include "home.inc";
?>