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
  background-position: center;
  background-size: 2000px;
  background-attachment: fixed;
  background-opacity: 0,1;

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
      <a href="#" class="btn btn-primary w-100 rounded-pill mt-3" onclick="logoutFunction()">Logout</a>
    </div>
  </div>
</nav>

<br>
<br>
<br>
<div class="container">
<a href="tambahbuku.php" class="btn btn-primary mb-2">TAMBAH DATA</a>
</div>

<div class="container">
  <div class="card">
    <div class="card-body">
      <figure class="text-center">
          <blockquote class="blockquote">
            <h3 class="text align-center">DATA BUKU PERPUSTAKAAN PAUD FLAMBOYAN 1</h3>
          </blockquote>
      </figure>

<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Melukis Gambar awan</td>
      <td>Gramedia</td>
      <td>2021</td>
      <td><a href="editbuku.php" class="btn btn-info">EDIT</a> <a href="#" class="btn btn-danger" onclick="hapusFunction()">HAPUS</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Menghitung dengan ceria</td>
      <td>Bagus buku jakarta</td>
      <td>2019</td>
      <td><a href="editbuku.php" class="btn btn-info">EDIT</a> <a href="#" class="btn btn-danger" onclick="hapusFunction()">HAPUS</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Menghapal Huruf Hijaiyah</td>
      <td>Aqmal.org</td>
      <td>2016</td>
      <td><a href="editbuku.php" class="btn btn-info">EDIT</a> <a href="#" class="btn btn-danger" onclick="hapusFunction()">HAPUS</a></td>
    </tr>
  </tbody>
</table>

    </div>
  
  </div>

</div>
<br>
<br>
<br>
<br>

<!--awal footer -->


  <div class="container">
  <h6 class="bg-light text-dark text-center p-3 mt-5"><a href="kontak.php"><strong>Nasrudin X DTS-Kominfo 2021</strong></a></h6>
  </div>




<!--akhir footer -->







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

   
  </body>

   <script>
    function hapusFunction() {
         var aksiKlik = confirm("Anda Yakin Data ini mau dihapus ?");
      if (aksiKlik == true) {
        window.location.href="home.php";
      } else {
        window.location.href="home.php"
      }
    }

    function logoutFunction() {
      var aksiKlik = confirm("Anda Yakin Keluar dari aplikasi?");
      if (aksiKlik == true) {
        window.location.href="index.php";
      } else {
        window.location.href="home.php"
      }
    }
</script>

</html>

