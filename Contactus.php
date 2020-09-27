<?php 
  
  require_once('database.php');

  if(isset($_POST['feed-submit'])){
     $email = $_POST['email'];
   
    $contact=$_POST['contact'];
    $feedback=$_POST['feedback'];
    $sql = "INSERT INTO `feedback`(`id`, `email`, `contact`, `feedback`) VALUES (null,'$email','$contact','$feedback')";
    InsertData($sql);
    
  }
 ?> 






<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
     <meta charset="utf-8"/>
     <meta description="BLog 2 BLog"/>
     <meta lang="en"/>
     <meta keywords="BLog 2 BLog"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="contact.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 </head>
 <body>
     <center><br/>
 	<h1></h1>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Xtra time </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="LandingPage.php">Landing Page
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Contactus.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Login.php">Sign in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Register.php">Create account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br/>
<br/>

     <!--<div class="container">
     <ul class="pagination justify-content-center">
     <li class="pagination"><a class="page-link"href="aboutus.html">About us</a></li>
     <li class="pagination"><a class="page-link"href="Landingpage.html">Landing Page</a></li>
     <li class="pagination"><a class="page-link"href="Login.html">Login here</a></li>
      <li class="pagination"><a class="page-link"href="Register.html">Register here</a></li>
     </ul>
     </div> 
     <hr/>-->
     <center><strong>Send us your feedback below and we will try to address them all on a case-by-case basis.</strong>
<form id="feedback-form" class="form" action="Contactus.php" method="POST">
         
     

          <label for="email">Email</label><br/>
          <input type="email" id="feed-email" name="email" required="true" />
     <br/>
         <label for="contact">Contact</label><br/>
         <input type="contact" id="feed-password" name="contact" required="true" >
     <br/><label for="feedback">Feedback</label><br/>
         <textarea type ="feedback" id="feed-feedback" name="feedback" rows="4" cols="24"></textarea>
     <br/>
     <input type="submit" name="feed-submit" value="Submit">
     </form></strong></center>
     <br/>
     <br/>
     <br/>
     <br/>
     <hr/>

      <strong>Want to get in touch with us <br/>
Here’s how; click on the icons for direct access to our social media accounts.<br/>
<a href="mailto:Bruce.Onyango@strathmore.edu"target="_blank"><svg class="bi bi-bell" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
  <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg></a>


<!--SUBSCRIPTIONS
Find our latest subscription offers here.--->

Email:Bruce.onyango@strathmore.edu
<br/><svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
Telephone: +254707024550
<br/><a href="https://twitter.com/home"target="_blank" class="fa fa-twitter"></a>
Twitter: twitter.com/xtratime<br/><a href="https://facebook.com/home"target="_blank" class="fa fa-facebook"></a>
Facebook: https://www.facebook.com/xtratime
<br/>
POSTAL ADDRESS

xtratime<br/>
P.O.box 15939-00100</strong>
<br/></center>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; xtratime 2020</p>
    </div>
    <!-- /.container -->
</footer>


 </body>
 </html>