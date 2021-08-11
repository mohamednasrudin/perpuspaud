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
    body {
      /*background-image: url("images/home.jpg");*/
      background-position: fixed;
      background-size: 1500px;
      background-attachment: fixed;
      background-opacity: 0.3;

    }
      .hero{
  opacity: 0.9;
  font-family: "Lucida Console", "Courier New", monospace;
  position: center;
  font-weight: bold;
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
      <a href="register.php" class="btn btn-primary w-100 rounded-pill">Register</a>
    </div>
  
  </div>
</nav>

<!-- Hero Section -->
    <section class="hero">
      <div>
             <div class="row">
              
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4 mb-0">
                <h1 class="h2 text-dark"><strong>SELAMAT DATANG</strong></h1>
                <img width="250" src="images/profil.png" alt="logo login" class="rounded-circle mb-0 mt-1"/>
          <div class="row">
            </div>
        </div>
     
          <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-0">
                <form action="home.php" method="POST" name="login" id="login" onsubmit="return Login()">
                    <div class="form-group">
                        <div class="form-floating mb-3">
                <input type="text" class="form-control mb-2" name="username" id="username" placeholder="Username" autocomplete="off" Required="">
                
                <label for="username">Username</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control mb-2" name="password" id="password" placeholder="Password" autocomplete="off" Required="">
                <label for="password">Password</label>
            </div>
            <div class="alert alert-danger" role="alert">
                    <p> username : admin</p>
                    <p> password : admin123</p>
                                  </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary w-100" value="Login" name="login" onClick="Login()"/>
                    </div>

                </form>
            </div>
        </div>
    </div>

       </div>
   

     

    </section>
    <!-- End of Hero Section -->


    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>

   <script type="text/javascript">
  function Login(){
       
        var username=document.login.username.value;
        username=username.toLowerCase();
        var password=document.login.password.value;
        password=password.toLowerCase();
       
            if (username =="admin" && password=="admin123"){
              alert("login berhasil !");
                return true;
            window.location.href="home.php";
            }else if(username ==""|| password==""){
              alert("Username atau password tidak boleh kosong");
                return false;
            window.location.href="index.php";
            }else{
              alert("username atau password salah");
                return false;
            window.location.href="index.php";
            }
        }            
      </script>
</html>