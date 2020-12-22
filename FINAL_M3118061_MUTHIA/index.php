<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>M3118061-UAS-SKD</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="assets/images/fevicon.png" type="assets/image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="assets/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.php">Home</a> </li>
							  <li> <a href="caesar/index.php">Caesar Cipher</a> </li>
							  <li> <a href="vigenere/index.php">Vigenere Cipher</a> </li>
							  <li> <a href="login/login.php">LOGIN</a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="assets/images/gambar3.png" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1> Aplikasi<br>Enkripsi dan Dekripsi </h1><br>
                        <a  href="register/register.php">Register</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="assets/images/gambar3.png" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Caesar Cipher</h1>
						<p>
							Caesar cipher merupakan subset dari cipher polialfabetik vigenere. Pada Caesar
							cipher, karakter pesan dan pengulangan kunci dijumlahkan bersama, kemudian
							dimodulo 26. Dalam penjumlahan modulo 26, huruf A-Z dari abjad masing-masing
							memberikan nilai 0-25.
						</p>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="assets/images/gambar3.png" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Vigenere Cipher</h1>
						<p>
							Algoritme ini pertama kali dikenalkan oleh Blaise de Vigenere. Ia adalah seorang
							kriptografer asal Perancis. Ide yang mendasari adanya algoritme ini adalah algoritme
							Caesar cipher yang ditemukan oleh Raja Julius Caesar. 
						</p>
                     </div>
                  </div>
               </div>
			   <div class="carousel-item">
                  <img class="third-slide" src="assets/images/gambar3.png" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Algoritme MD5</h1>
						<p>
							Dibuat oleh Ron Rivest pada tahun 1991. Algoritme MD5 adalah salah satu
							penggunaan fungsi hash satu arah yang paling banyak digunakan. MD5 merupakan
							pengembangan dari algoritme kriptogafi MD4. Algoritme MD5 menerima berupa
							masukan pesan dengan ukuran sembarang dan menghasilkan message digest
							dengan panjang 128 bit. 
						</p>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!--  footer --> 
      <footr>
            <div class="copyright">
               <p>Copyright &copy; UAS Sistem Keamanan Data 2020</a></p>
            </div>
         </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="assets/js/jquery.min.js"></script> 
      <script src="assets/js/popper.min.js"></script> 
      <script src="assets/js/bootstrap.bundle.min.js"></script> 
      <script src="assets/js/jquery-3.0.0.min.js"></script> 
      <script src="assets/js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="assets/js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>