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
  background-color: gainsboro;
  background-image: url("images/library.jpg");
  background-position: center;
  background-size: 1500px;
  background-attachment: fixed;
}

.badan {
  background-color: white;
  padding: 13px 0;
  margin-top: 30px;
}

.peding-100 {
  padding: 50px;
}

.peding-30 {
  padding: 30px;
}
.divKontak {
  font-size: 30px;
  font-weight: bold;
  font-family: "Lucida Console", "Courier New", monospace;
}
.hero{
  opacity: 0.9;
  font-family: "Lucida Console", "Courier New", monospace;
}

  </style>

<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  </head>
  <body>

  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <h2>Perpustakaan PAUD Flamboyan 1 </h2>
    </a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="index.php" class="btn btn-primary w-100 rounded-pill">Logout</a>
    </div>
  
  </div>
</nav>

 <!-- Hero Section -->
    <section class="hero">
      <div class="text-center pt-5 mb-1" style="background-color: white">
        <h1>Vocational School Graduate Academy 2021</h1>
        <img width="250" src="images/nasrudin.jpeg" alt="logo vsga" class="rounded-circle mb-1" style: opacity:1.2; />
          <div class="row">
        <div class="col peding-100 mt-1 divKontak">
          
          <p>
            NASRUDIN
          </p>
          <p>
            Junior Web Development VSGA-TelU 2021 || JWDD
          </p>
          <P>
            Diploma III BSI Karawang
          </P>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ecfada"
          fill-opacity="1"
          d="M0,96L48,96C96,96,192,96,288,122.7C384,149,480,203,576,208C672,213,768,171,864,154.7C960,139,1056,149,1152,128C1248,107,1344,53,1392,26.7L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>

       <div class="container">
        <h6 class="bg-light text-dark text-center p-3 mt-5"><a href="home.php"><strong>Nasrudin X DTS-Kominfo 2021</strong></a></h6>
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
  function validasi_data(form) {  
    if (form.username.value=="") {
      alert('username  harus di isi !');
      form.username.focus();
      return false;
    }else if(form.password.value=="") {
      alert('password harus di isi !');
      form.password.focus();
      return false;
    }
  }
</script>

</html>