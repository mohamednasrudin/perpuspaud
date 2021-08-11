<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Perpus-PHP</title>
    <style>
        body
        {
            background-color: white;
            
        }
        
        .badan
        {
            background-color: white;
            padding: 13px 0;
            margin-top: 30px;
        }
        .navAtas{
            background-attachment: fixed;
            position: fixed;
            top: 0;
            width: 100%;
        }
        
        .peding-100
        {
            padding: 120px;
        }
        
        .peding-30
        {
            padding: 30px;
        }
        .gambar{
            position: center;
        }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <h2>Perpustakaan PAUD Flamboyan 1 </h2>
    </a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="index.php" class="btn btn-primary rounded-pill">Login</a>
    </div>
  
  </div>
</nav>
<br>
   

    <div class="container badan">
       
      <div class="row">
        <div class="col peding-150 gambar">
          <img src="images/library.jpg" alt="daftar" width="600" height="400">
        </div>
 
        <div class="col peding-30">
          <form action="" method="POST" onSubmit="return validasi_data(this)">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username Anda">
                        </div>

                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Masukan Nama Lengkap Anda">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password Anda">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        </div>
                        
                        <div class="mb-3">
                            <label for="nohp" class="form-label">Nomor Handphone</label>
                            <input type="number" class="form-control" name="nohp" id="nohp" placeholder="Masukan Nomor Handphone Anda">
                        </div>
                        <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Rumah</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                        </div>
                      
               

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary w-100" value="DAFTAR" name="register" />
                    </div>

                </form>
        </div>
      </div>
 
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>

    <script type="text/javascript">
        function validasi_data(form) {  
            if (form.username.value=="") {
            alert('Username  harus di isi !');
            form.username.focus();
            return false;
            }else if(form.fullname.value=="") {
            alert('Nama Lengkap harus di isi !');
            form.fullname.focus();
            return false;
            }else if(form.password.value=="") {
            alert('password harus di isi !');
            form.password.focus();
            return false;
            }else if(form.email.value=="") {
            alert('email harus di isi !');
            form.email.focus();
            return false;
            }else if(form.nohp.value=="") {
            alert('nohp harus di isi !');
            form.nohp.focus();
            return false;
            }else if(form.alamat.value=="") {
            alert('alamat harus di isi !');
            form.alamat.focus();
            return false;
            }
        }
    </script>

</html>