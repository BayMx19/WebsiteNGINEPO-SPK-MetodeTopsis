<?php
include "header.php";
include "menu.php";
?>

    <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <?php
                  	if ($_SESSION[status]==admin){                  
                  	?>

                  <h1 class="mt-5"><p style="text-align:center; color:#000;"><b>Halaman Utama Administrator</b></p></h1>
		          <p class="lead" align="center">
		          	SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN HOTEL TERBAIK DI SURABAYA <br>MENGGUNAKAN METODE TOPSIS
					
		          </p>
		          <p class="lead" align="center"><img src="images/3.png" align="center" width="150"></p>
                    
                  <?php
                  } else if ($_SESSION[status]==pemilik) {
                  ?>

                  <h1 class="mt-5"><p style="text-align:center; color:#000;"><b>Anda Login Sebagai Pemilik Hotel</b></p></h1>

                  <p align="center">
		          	SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN HOTEL TERBAIK DI SURABAYA <br> MENGGUNAKAN METODE TOPSIS
					
		          </p>
		          <p class="lead" align="center"><img src="images/3.png" align="center" width="150"></p>

                  <table class="table table-sm" align="left">
                         <tr>
                          <td>Nama</td>
                          <td>: <?php echo ''.$_SESSION[nama].'';?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td>: <?php echo ''.$_SESSION[alamat].'';?></td>
                        </tr>
                        <tr>
                          <td>No. telepon</td>
                          <td>: <?php echo ''.$_SESSION[telepon].'';?></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>: <?php echo ''.$_SESSION[email].'';?></td>
                        </tr>
                        <tr>
                          <td>Login Sebagai</td>
                          <td>: 
                            <?php 
                            if ($_SESSION[status] == user){
                                echo 'Pencari Hotel';
                            } else if ($_SESSION[status] == pemilik) {
                                echo 'Pemilik Hotel';
                            }
                            
                            ?>
                          </td>
                        </tr>
                        
                        </table>

                  <?php
                  } else if ($_SESSION[status]==user) {


                  ?>

                  <h1 class="mt-5"><p style="text-align:center; color:#000;"><b>Anda Login Sebagai Pencari Hotel</b></p></h1>

                  <p align="center">
		          	SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN HOTEL TERBAIK DI SURABAYA <br>MENGGUNAKAN METODE TOPSIS
					
		          </p>
		          <p class="lead" align="center"><img src="images/3.png" align="center" width="150"></p>

                  <table class="table table-sm" align="left">
                         <tr>
                          <td>Nama</td>
                          <td>: <?php echo ''.$_SESSION[nama].'';?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td>: <?php echo ''.$_SESSION[alamat].'';?></td>
                        </tr>
                        <tr>
                          <td>No. telepon</td>
                          <td>: <?php echo ''.$_SESSION[telepon].'';?></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>: <?php echo ''.$_SESSION[email].'';?></td>
                        </tr>
                        <tr>
                          <td>Login Sebagai</td>
                          <td>: 
                            <?php 
                            if ($_SESSION[status] == user){
                                echo 'Pencari Hotel';
                            } else if ($_SESSION[status] == pemilik) {
                                echo 'Pemilik Hotel';
                            }
                            
                            ?>
                          </td>
                        </tr>
                        
                        </table>
                                      
                  <?php } else { ?>

                  	<h1 class="mt-5" style="text-align:center; color:#000;">Anda Tidak Dapat mengakses Halaman Ini</h1>
                    
                  <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
 <?php
include "footer.php";
?>           