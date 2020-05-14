


<?php
include"header.php";


?>
        <?php

include "db.php";
if (isset($_POST["email"])) {
    $email = $_POST['email'];
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    
    if(empty($email)){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill this field..!</b>
			</div>
		";
		exit();
    }else{
        if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
        $sql = "SELECT email_id FROM email_info WHERE email = '$email' LIMIT 1" ;
        $check_query = mysqli_query($con,$sql);
        $count_email = mysqli_num_rows($check_query);
        if($count_email > 0){
            echo "
                <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Email Address is already available</b>
                </div>
            ";
            exit();
        }else{
            
            $sql = "INSERT INTO `email_info` 
            (`email_id`, `email`)
            VALUES (NULL, '$email')";
            $run_query = mysqli_query($con,$sql);
                echo "<div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Thanks for subscribing</b>
                </div>";
                
                
            }

        
    }
    
}
?>
<html>
<head>
	<style>
		#newsletter.section {
			
  border-top: 2px solid #E4E7ED;
  border-bottom: 3px solid #D10024;
  margin-top: 30px;
}

.newsletter {
  text-align: center;
}

.newsletter p {
  font-size: 24px;
}

.newsletter form {
  position: relative;
  max-width: 520px;
  margin: 30px auto;
}

.newsletter form:after {
  content: "\f003";
  font-family: FontAwesome;
  position: absolute;
  font-size: 160px;
  color: #E4E7ED;
  top: 15px;
  -webkit-transform: translateY(-50%) rotate(15deg);
  -ms-transform: translateY(-50%) rotate(15deg);
  transform: translateY(-50%) rotate(15deg);
  z-index: -1;
  left: -90px;
}

.newsletter form .input {
  width: calc(100% - 160px);
  margin-right: -4px;
  border-radius: 40px 0px 0px 40px;
}

.newsletter form .newsletter-btn {
  width: 160px;
  height: 40px;
  font-weight: 700;
  background: #00B4DB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  color: #FFF;
  border: none;
  border-radius: 0px 40px 40px 0px;
}

.newsletter .newsletter-follow {
  text-align: center;
}

.newsletter .newsletter-follow li {
  display: inline-block;
  margin-right: 5px;
}

.newsletter .newsletter-follow li:last-child {
  margin-right: 0px;
}

.newsletter .newsletter-follow li a {
  position: relative;
  display: block;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  border: 1px solid #E4E7ED;
  background-color: #FFF;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.newsletter .newsletter-follow li a:hover, .newsletter .newsletter-follow li a:focus {
  background-color: #E4E7ED;
  color: #D10024;
}

/*=========================================================
	11 -> FOOTER
===========================================================*/

#footer {
  background: #15161D;
  color: #B9BABC;
}

#bottom-footer {
  background: #1E1F29;
}

.footer {
  margin: 30px 0px;
}

.footer .footer-title {
  color: #FFF;
  text-transform: uppercase;
  font-size: 18px;
  margin: 0px 0px 30px;
}

.footer-links li+li {
  margin-top: 15px;
}

.footer-links li a {
  color: #4834DF;
}

.footer-links li i {
  margin-right: 15px;
  color: #D10024;
  width: 14px;
  text-align: center;
}

.footer-links li a:hover {
  color: #E71C23;
}

.copyright {
  margin-top: 30px;
  display: block;
  font-size: 12px;
}

.footer-payments li {
  display: inline-block;
  margin-right: 5px;
}

.footer-payments li a {
  color: #15161D;
  font-size: 36px;
  display: block;
}
</style></head>

        <div id="newsletter" class="section">
			<!-- container -->
			<div class="container" >
				<!-- row -->
				<div class="row" >
					<div class="col-md-12">
					
						<div class="newsletter" >
							<p>Sign Up for the <strong>OFFER UPDATES</strong></p><p>or mail me on shobitg123@gmail.com</p>
							<form id="offer_form" onsubmit="return false">
								<input class="input" type="email" id="email" name="email" placeholder="Enter Your Email">
								<button class="newsletter-btn" value="Sign Up" name="signup_button" type="submit"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<div class="" id="offer_msg">
                                <!--Alert from signup form-->
                            </div>
							<ul class="newsletter-follow">
								<li style="color:black;">Connect with me</li>
								<li>
									<a href="https://twitter.com/ShobitGangadhar"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/ShobitGangadhar"><i  class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/ShobitGangadhar"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/ShobitGangadhar"><i class="fa fa-github"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!containers>
		</div>
		</html>

<?php
include"footer.php";
?>