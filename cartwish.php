<?php
include "header.php";
?>


<section class="section">
<div class="container-fluid">	
    <div id="cart_checkou">
    	<div class="col-25">
				<div class="container-checkout">
				
				<?php
				
					echo
					"
					<h4>Cart 
					<span class='price' style='color:black'>
					<i class='fa fa-shopping-cart'></i> 
					<b>$total_count</b>
					</span>
				</h4>

					<table class='table table-condensed'>
					<thead><tr>
					<th >no</th>
					<th >product title</th>
					<th >	qty	</th>
					<th >	amount</th></tr>
					</thead>
					<tbody>";

						echo "	

						<tr><td><p>$item_number_</p></td><td><p>$item_name_</p></td><td ><p>$quantity_</p></td><td ><p>$amount_</p></td></tr>";
						
						
					

				echo"

				</tbody>
				</table>
		";
				?>
    </div>
</div>
</section>	

<?php
include "footer.php";
?>