<html>
<head>
	<title>Form Enkripsi</title> <!-- memberi judul halaman -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <!-- form action untuk memindahkan halaman setelah di submit, akan dipindahkan ke halaman hasil_enkripsi.php -->
  	<form action="hasil_enkripsi.php" method="POST">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
		  <!-- judul form -->
			<center><h1>Form Enkripsi</h1></center>
            <form class="form-signin"  action="" method="post">
             <!-- Form Plaintext -->
              <div class="form-label-group">
                <input type="text" id="kalimat" class="form-control" name="kalimat" placeholder="Masukkan Plaintext">
              </div>
			  <br>
              <!-- Form kunciN -->
              <div class="form-label-group">
                <input type="text" id="kunciN" class="form-control" name="kunciN" placeholder="Masukkan kunci n = 187">
              </div>
			  <br>
             <!-- Form kunciE -->
              <div class="form-label-group"> 
                <input type="text" id="kunciE" class="form-control" name="kunciE" placeholder="Masukkan kunci e = 7">
              </div>
			  <br>
             
			  <!-- button submit -->
              <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value='submit'>
            </form>
         
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


