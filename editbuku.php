<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Perpus-PHP</title>
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
   

     <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto">
                <div class="alert alert-primary" role="alert">
                    <h3>Edit Data Buku</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-5">
                <form action="" method="POST" onSubmit="return validasi_data(this)">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="username" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul Buku">
                        </div>

                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukan Nama Penerbit">
                        </div>

                        <div class="mb-3">
                            <label for="tahunBuku" class="form-label">tahun</label>
                            <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukan Tahun Buku">
                        </div>

                        
                        
                    

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary w-100" value="UPDATE DATA" name="update" />
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
            if (form.judul.value=="") {
            alert('judul  harus di isi !');
            form.judul.focus();
            return false;
            }else if(form.penerbit.value=="") {
            alert('penerbit harus di isi !');
            form.penerbit.focus();
            return false;
            }else if(form.tahun.value=="") {
            alert('tahun harus di isi !');
            form.tahun.focus();
            return false;
            }
        }
</script>
</html>