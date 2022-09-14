
<?php include'header.php'; ?>

<body>

  <?php include'topmenu.php'; ?>

  


<?php include'menu.php'; ?>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Leave A Comment </h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Leave A Comment </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section>
      <div class="container">
        <div class="row">

     <img src="images/07.jpeg" height="350">

     <br>


      

  <?php
       $conn = mysqli_connect("localhost", "root", "","alaminfo_db");

//$result=mysqli_query($mysqli,"SELECT* from comments ORDER BY post_id DESC");
        $result=mysqli_query($conn,"SELECT * from comments");

        //$con = mysqli_query($conn,"SELECT distinct date FROM f2b_madhurio");
        ?>

         <?php
          while($res=mysqli_fetch_array($result)){
            
            echo '<tr>';

        echo'<td>'.'<br>'.$res['message'].'</td>';
  
  }     
  
  ?>

  </tbody>
  </table>




 
</div>




  </div>
  </div>
   </section>
    
   
   <section id="contact" class="contact">
      <div class="container">

       <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Muungano, Zanzibar</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@alaminfoundation.or.tz</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(+255) 778 753 384</p>
              </div>

            </div>

          </div>


          <div class="col-lg-8 mt-5 mt-lg-0">


    <?php
                            $conn = mysqli_connect("localhost", "root", "","alaminfo_db");

                        $mgs=0;

                        if(isset($_POST['submit'])){

                          $username = $_POST['username'];
                          $title = $_POST['title'];
                          $message = $_POST['message'];
                          $email = $_POST['email'];
                         

                          $tia = mysqli_query($conn,"INSERT INTO comments(username,title,message,email) VALUES('$username','$title','$message','$email')");

                          if($tia){

                             $mgs=1;
                            }
                         else{


                              echo"<div class= 'alert alert-success'><center><strong><b>No Connection</strong></b></div>";
                            }
                          }

                        ?>


 <div class="panel panel-default">

  <?php if($mgs){

  ?>

  <div class="alert alert-success">
    <center><strong>Your Messasge Will be Sent to Admin</strong>

  </div>

<?php   }?>

</div>

            <form action="contact.php" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="username" class="form-control" id="name" placeholder="Your Name *" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email *" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="title" id="subject" placeholder="Subject *" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message *" required></textarea>
              </div>

                 <br>
                <div class="php-email-form"><button type="submit" name="submit">Send Message</button></div>
          
            </form>

          </div>

        </div>

      </div>
    </section>







  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <?php include'footer.php'; ?>
  