

    <?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "sh";

// Create connection
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"sh");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="panel-body">
    
                </div>



<div class="row">
            <div class="col-md-6">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Categories List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Categories</th><th>Count</th>
                    </tr></thead>
                    <tbody>
                    <?php 
                    $servername = "localhost";
$username = "root";
$password = "";
$db = "sh";

// Create connection
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"sh");



                      

                        $result=mysqli_query($con,"select * from atten")or die ("query 1 incorrect.....");
                        $i=1;
                        while(list($name,$class)=mysqli_fetch_array($result))
                        { 
                            $sql = "SELECT * from atten";
                            $query = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($query);
                            $count=$row["$query"];
                            $i++;
                        echo "<tr><td>$name</td><td>$class</td><td>$good</td>

                        </tr>";
                        }
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