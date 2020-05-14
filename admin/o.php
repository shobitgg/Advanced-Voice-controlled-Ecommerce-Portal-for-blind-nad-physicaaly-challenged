
    <?php
session_start();
include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['product_id'];

/*this is delet quer*/
mysqli_query($con,"delete from products where product_id='$product_id'")or die("query is incorrect...");
}

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Manage User</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead class=" text-primary">
                      <tr><th>PRODADDD</th>
                <th>User Password</th>
	<th><a href="addproduct.php" class="btn btn-success">Add New</a></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select product_id, product_title, product_price from products")or die ("query 2 incorrect.......");

                        while(list($product_id,$product_title,$price)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$product_id</td><td>$product_title</td><td>product_price</td>";

                        echo"<td>
                        
                        <a href='p.php?product_id=$product_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete '>
                                <i class='material-icons'>close</i>
                              <div class='ripple-container'></div></a>
                        </td></tr>";
                        }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>