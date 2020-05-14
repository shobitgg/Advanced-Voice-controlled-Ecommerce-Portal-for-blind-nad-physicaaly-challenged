<footer id="footer" >
			
			<div class="section"  style="background-color:black;">
				
				<div class="container"style="background-color:black;">
					
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 style="color:#FFDC00;" class="footer-title">About Me</h3>

								<p style="color:white;">This is a interactive Website to emphasis online shopping using php,javscript,css,html,jquery,bootstrap,etc.,etc.</p>
								<ul class="footer-links">
								<li><a href="#"><p style="color:white;"><i class="fa fa-map-marker"></i>VIT VELLORE</p>
								</a></li>
									
									<li><a href="#"><p style="color:white;"><i class="fa fa-envelope-o"></i>shobitg123@gmail.com</p></a></li>
								</ul>
							</div>
							</div >
						
						



						<div class="col-md-6 text-center" style="margin-top:80px;">
							<h3 style="color:#FFDC00;">OUR PARTNERS</h1>
							<big><ul class="footer-payments">

								<li><a href="#"><i class="fa fa-cc-stripe" style="font-size:48px;color:white;" ></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card" style="font-size:48px;color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal" style="font-size:48px;color:white;" ></i></a></li>
								<br>
								<li><a href="#"><i class="fa fa-cc-mastercard" style="font-size:48px;color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover" style="font-size:48px;color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex" style="font-size:48px;color:white;" ></i></a></li>
								
							
							</ul></big>
							<span class="copyright" style="color:#FFDC00;">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SHOBIT G VIT VELLORE 
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title" style="color:#FFDC00;" >Categories</h3>
								<ul class="footer-links">
									<li><a style="color:white;"href="#">Mobiles</a></li>
									<li><a style="color:white;" href="#">Men</a></li>
									<li><a style="color:white;" href="#">Women</a></li>
									<li><a style="color:white;" href="#">Kids</a></li>
									<li><a style="color:white;" href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
