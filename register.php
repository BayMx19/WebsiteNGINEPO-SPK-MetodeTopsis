<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Daftar Nginepo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/validator.min.js"></script>
        
   

        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery.chained.min.js"></script>
        
  
    <style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #CB356B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #BD3F32, #CB356B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #BD3F32, #CB356B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.card-signin {
  border: 0;
  border-radius: 10px;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 10px;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 10px;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}
a {
  color:#BD3F32;
}
.form-label-group>label {
  position:absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;


  color: #495057;
  border: 1px solid transparent;
  border-radius: 10px;
  transition: all .1s ease-in-out;
}

/* .form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
} */

 .form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
} 

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}


/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
    </style>
</head>
<body>
<?php
ini_set("display_errors","Off");
include("connect.php");
?>

<?php

if (empty($_SESSION[username])){
 

?>

 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <br>
              <h2 class="card-title text-center" style="font-family:Georgia, 'Times New Roman', Times, serif;"><b>Nginepo | Daftar</b></h2>
                        
               <br><br>

               <form class="form-horizontal" action="" method="post" role="form">
                  <div class="form-label-group">
                      <input type="text" id="inputName" name="nama" class="form-control"  placeholder="Nama Lengkap" autocomplete="on" required autofocus>
                    
                  </div>

                  <div class="form-label-group">
                      <textarea  id="inputName" placeholder="Alamat" name="alamat" class="form-control"  autocomplete="off" rows="5" cols="50" required autofocus></textarea>
         
                  </div>

                  <div class="form-label-group">
                      <input type="number" data-error="Nomor Telepon Tidak Boleh Kosong." name="telepon" class="form-control"  placeholder="Nomor Telepon" autocomplete="off" required autofocus>
              
                  </div>

                  <div class="form-label-group">
                      <input type="text" data-error="Email Tidak Boleh Kosong." id="inputEmail" name="email" class="form-control"  placeholder="Email" autocomplete="off" required autofocus>
                  
                  </div>

                  <div class="form-label-group">
                        <select class="form-control" style="border-radius:10px;" title="Please Select" id="select" name="tipe" required>
                                                        <option value="" selected>- Level -</option>
                                                        <option value="user">Pencari Hotel</option>
                                                        <option value="pemilik">Pemilik Hotel</option>
                                                        
                                                        
                                                    </select>
                        
                  </div>  

                  <div class="form-label-group">
                    <input type="text" data-error="Username Tidak Boleh Kosong." id="inputName" name="username" class="form-control"  placeholder="Username" autocomplete="off" required autofocus>
                     
                  </div>

                  <div class="form-label-group">
                      <input type="password" data-minlength="8" data-error="Password Minimal 8 Karakter." id="inputPassword" name="password" class="form-control"  placeholder="Password" autocomplete="off" required autofocus>
                  </div>

                  <div class="form-label-group">
                      <input type="password" data-minlength="8" data-error="Password Minimal 8 Karakter." id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Password Tidak Sama" placeholder="Konfirmasi Password" class="form-control" autocomplete="off" required autofocus>
                  </div>

                   <button class="btn btn-lg btn-primary btn-block text-uppercase" id="btn-fblogin" type="submit" name="login" value="Daftar" style="border-radius:10px; background: #CB356B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #BD3F32, #CB356B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #BD3F32, #CB356B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
"><b>Daftar</b></button>
              <p style="text-align:center;">Sudah punya akun?<a href="login.php"> Masuk</a></p>
              <br>
                  </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php                                      

                                      $nama=$_POST['nama'];
                                      $alamat=$_POST['alamat'];
                                      $telepon=$_POST['telepon'];
                                      $email=$_POST['email'];
                                      $tipe=$_POST['tipe'];
                                      $username=$_POST['username'];
                                      $password=$_POST['password'];

                                     

                                      if(isset($nama,$telepon)){
                                        if((!$nama)||(!$telepon)){
                                        print "<script>alert ('Harap semua data diisi...!!');</script>";
                                        print"<script> self.history.back('Gagal Menyimpan');</script>"; 
                                        exit();
                                        } 

                                      $add_kelas="INSERT INTO login(nama,alamat,no_telepon,email,status,user,password) VALUES 
                                      ('$nama','$alamat','$telepon','$email','$tipe','$username',md5('$password'))";
                                      mysql_query($add_kelas,$koneksi);

                                        if (! $add_kelas) {
                                            echo '<div class="alert alert-danger"><strong>Registrasi Gagal,silahkan Cek Kembali!</strong></div>';
                                        } else {
                                            echo "
                                            <script>alert('Registrasi Berhasil, Silahkan Login'); window.location.href = 'login.php';</script>
                                            ";
                                        }

                                      } 

                                ?>


   
<?php

}else{
 echo '
 <br>
 <div class="container"> 

 <div class="alert alert-danger">
  <p><strong>Anda tidak bisa mengakses halaman ini,dikarenakan
  ANDA SUDAH LOGIN DENGAN USERNAME: <b>'.$_SESSION[username].'</b> Silahkan Logout terlebih dahulu <a href="logout.php">Logout</a>!</strong></p>
 </div>
 
 </div>
 ';
}

 ?> 
