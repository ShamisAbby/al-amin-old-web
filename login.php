<?php include 'header.php'; ?>
<body>
  <?php include'topmenu.php'; ?> 


  <section class="section-content-block">
       
            <div class="container">
                 <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="login-box-body">
                        <p class="login-box-msg">Sign in to start your session</p>
                        <form action="login.php" method="POST" autocomplete="off">
                          <div class="form-group has-feedback">
                            <input name="username" type="email" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                          </div>

                          <br>

                          <div class="form-group has-feedback">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-8">
                              <div class="checkbox icheck">
                                <label>
                                  <input type="checkbox"> Remember Me
                                </label>
                              </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                              <button name="login" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>
                            <!-- /.col -->
                          </div>
                        </form>
                        <a href="#">I forgot my password</a><br>
                        <a href="#" class="text-center">Register a new membership</a>
                  </div>
                  				
				<?php
// user login.......................................................

if (isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$bal=0;

$conn = mysqli_connect("localhost", "root", "","alaminfo_db");

// control submision of nul data to the database.....................

if(empty($_POST['username']) and empty($_POST['password']))
{
print"<font color=\"red\" size=\"4\">Fill all the Fields Please..!</font>";
}
elseif(empty($_POST['username']))
{
print"<font color=\"red\" size=\"4\">Fill User name Please..!</font>";

}
elseif(empty($_POST['password']))
{
print"<font color=\"red\" size=\"4\">Fill Password Please..!</font>";
}
else
{
$q="SELECT * FROM `admn` where username='$username' and password='$password'";
$result=mysqli_query($conn,$q);
@$count=mysqli_num_rows($result);
if(!$count==1)
	{
	
	echo"<font color=\"red\" size=\"5\">Wrong username or password</font>";		
	}
	
	else
	{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	echo '<script type="text/javascript">
           window.location = "admin/dashboard.php"
      </script>';	
	}
}
}
?>
                </div>
  <!-- /.login-box-body -->
            </div> <!--  end container -->
       
      </section> <!-- end .main-content  -->      

<?php include 'footer.php'; ?>
