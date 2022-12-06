<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Travel</title>
    <link rel="stylesheet" href="/itravel/css-slide/bootstrap.min.css">
    <link rel="stylesheet" href="/itravel/css-slide/style.css">
    <link rel="stylesheet" href="/itravel/css/cssku.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="css/tes.css"> -->
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top p-3" style="background-color: #252C6A;">
        <div class="container">
            <img class="me-3" src="/itravel/assets/logo unair fix trans.png" alt="Logo Unair" width="50px">
            <a class="navbar-brand" href="#" style="color: #FFEA7A;"><h3>I-Travel</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse righting" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color: #FFEA7A;" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #FFEA7A;" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #FFEA7A;" href="#footer">Hubungi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="submit" style="color: #FFEA7A;" data-bs-toggle="modal" data-bs-target="#login">Masuk</a>
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</button> -->
                </li>
                <li class="nav-item">
                    <a type="submit" style="color: #FFEA7A;" class="nav-link" data-bs-toggle="modal" data-bs-target="#register">Daftar</a>
                </li>
                </ul>
            </div>
        </div>
      </nav>

      <!-- banner -->
      <section class="home">
        <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-controls">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active" style="background-image:url('https://4.bp.blogspot.com/-3DggWS3Joic/WbvcnRW5ORI/AAAAAAAADlM/_6U3Z3lqd8E1kKkZffN_vlge8oEpVmZFQCEwYBhgL/s1600/Bis%2BUnir.jpg')"></li>
            <li data-target="#carousel" data-slide-to="1" style="background-image:url('https://www.ngopibareng.id/images/uploads/2022/2022-07-07/pemegang-kip-kuliah-bisa-daftar-seleksi-mandiri-tes-tulis-unair--thumbnail-582')"></li>
            <li data-target="#carousel" data-slide-to="2" style="background-image:url('https://cdn1-production-images-kly.akamaized.net/aN63BNjFgvV7CeG4z20T9hH55VI=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3556479/original/040964200_1630395690-UNAIR1.jpg')"></li>
          </ol>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
           <img src="/itravel/img/left-arrow.svg" alt="Prev">
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <img src="/itravel/img/right-arrow.svg" alt="Next">
        </a>
        </div>
        <div class="carousel-inner" style="height: 90vh;">
          <div class="carousel-item active" style="background-image:url('https://4.bp.blogspot.com/-3DggWS3Joic/WbvcnRW5ORI/AAAAAAAADlM/_6U3Z3lqd8E1kKkZffN_vlge8oEpVmZFQCEwYBhgL/s1600/Bis%2BUnir.jpg')">
            <div class="container">
               <h2>Lorem, ipsum dolor.</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, velit.</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image:url('https://www.ngopibareng.id/images/uploads/2022/2022-07-07/pemegang-kip-kuliah-bisa-daftar-seleksi-mandiri-tes-tulis-unair--thumbnail-582')">
            <div class="container">
               <h2>Lorem, ipsum dolor.</h2>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, est?</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image:url('https://cdn1-production-images-kly.akamaized.net/aN63BNjFgvV7CeG4z20T9hH55VI=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3556479/original/040964200_1630395690-UNAIR1.jpg')">
            <div class="container">
               <h2>Lorem, ipsum dolor.</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cum!</p>
            </div>
          </div>
        </div>
      </div>
       </section>

       <div id="tentang">

       </div>

       <!-- description -->
       <div class="container text-center mt-5 p-5">
        <h2 class="mb-3 border-bottom border-secondary pb-3" style="color: #252C6A;">I-Travel</h2>
        <p>         I-Travel adalah layanan yang menyediakan peminjaman bus untuk civitas akademika Universitas Airlangga. I-Travel ada untuk mendukung kesuksesan acara yang diadakan di Universitas Airlangga. I-Travel didirikan oleh sekelompok mahasiswa D3 Sistem Informasi yang didukung oleh Universitas Airlangga untuk mengembangkan sistem peminjaman bus milik Universitas Airlangga agar bisa berjalan dengan lebih efisien.</p>
       </div>

       <!-- renting -->
       <div class="container text-center p-5">
        <h2 class="mb-3 border-bottom border-secondary pb-3" style="color: #252C6A;">Cara Peminjaman</h2>
        <div class="row">
            <div class="col">
                <img class="p-4" src="/itravel/assets/1.png" alt="1">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, magni.</p>
            </div>
            <div class="col">
                <img class="p-4" src="/itravel/assets/2.png" alt="2">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, magni.</p>
            </div>
            <div class="col">
                <img class="p-4" src="/itravel/assets/3.png" alt="3">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, magni.</p>
            </div>
            <div class="col">
                <img class="p-4" src="/itravel/assets/4.png" alt="4">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, magni.</p>
            </div>
            <div class="col">
                <img class="p-4" src="/itravel/assets/5.png" alt="5">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, magni.</p>
            </div>
        </div>
       </div>

        <!--Login Modal -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title px-3" id="exampleModalLabel">Masuk ke akun anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="p-3">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="row d-flex">
                            <div class="col">
                                <a href="" style="color: #252C6A;">Lupa Password?</a><br>
                                <a href="" style="color: #252C6A;">Belum Punya Akun?</a>
                            </div>
                            <div class="col p-2 righting">
                                <a href="/home" type="submit" class="btn" style="color:#fff; background-color: #252C6A; border-radius:5px;">Submit</a>
                                <!-- <button type="submit" class="btn" style="color:#fff; background-color: #252C6A; border-radius:5px;">Submit</button> -->
                            </div>
                        </div>
                      </form>
                </div>
            </div>
            </div>
        </div>

       <!--Register Modal -->
       <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title px-3" id="exampleModalLabel">Membuat akun baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="p-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email atau No Handphone</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                          </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input name="app_date" type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                    <div class="row d-flex">
                        <div class="col p-3">
                            <a href="" style="color: #252C6A;">Sudah Punya Akun? Masuk</a>
                        </div>
                        <div class="col p-2 righting">
                            <button type="submit" class="btn" style="color:#fff; background-color: #252C6A; border-radius:5px;">Submit</button>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
        </div>
    </div>

            <!-- footer -->
            <footer id="footer" class="container-fluid px-5 pt-5" style="color:#fff;background-color: #252C6A;">
                <!--Footer Top Start-->
        <div class="footer-top section bg-heading pt-70 pb-70">
            <div class="container">
                <div class="row mbn-35">

                    <div class="col-lg-4 col-md-12 col-12 mb-35" style="display:flex;align-items: center; justify-content:center;">
                        <!--Footer Widget Start-->
                        <div class="uptimo-footer-widget">
                            <!--Footer Widget Inner Start-->
                            <div class="footer-widget-inner">

                                <!--Widget About-->
                                <div class="uptimo-footer-widget-about text-center pt-50 pt-sm-0 pt-xs-0">
                                    <a class="footer-logo"><img src="/itravel/assets/logo unair fix trans.png" alt="Logo Unair" style="width: 150px;"></a>
                                    <div class="footer-social mt-2 p-3">
                                        <a class="p-2" style="color: #fff;"><i class="fa fa-facebook"></i></a>
                                        <a class="p-2" style="color: #fff;"><i class="fa fa-twitter"></i></a>
                                        <a class="p-2" style="color: #fff;"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>

                            </div><!--Footer Widget Inner End-->
                        </div><!--Footer Widget End-->
                    </div>

                    <div class="offset-lg-4 col-lg-4 col-md-6 col-12 mb-35 p-3">
                        <!--Footer Widget Start-->
                        <div class="uptimo-footer-widget">
                            <!--Footer Widget Inner Start-->
                            <div class="footer-widget-inner">

                                <!--Widget Title-->
                                <h3 class="widget-title text-white mb-10">Contact Info</h3>
                                <!--Widget Contact-->
                                <div class="uptimo-footer-widget-contact">
                                    <div class="contact-item phone p-2"><i class="fa fa-phone"></i><a href="tel:<% contactInfo.phone %>"></a></div>
                                    <div class="contact-item email p-2"><i class="fa fa-envelope"></i><a href="mailto:<% contactInfo.email %>"></a></div>
                                    <div class="contact-item address p-2"><i class="fa fa-map-marker"></i><p></p></div>
                                </div>

                            </div><!--Footer Widget Inner End-->
                        </div><!--Footer Widget End-->
                    </div>


                </div>
            </div>
        </div>
        <!--Footer Top End-->

        <!--Footer Bottom Start-->
        <div class="footer-bottom section bg-black pt-10 pb-10 mt-3" >
            <div class="container">
                <div class="row">
                    <div class="uptimo-footer-copyright text-center col">
                        <p>Copyright 2022 By Kelompok Bus Uner</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom End-->
        </footer>
    <script src="/itravel/js/bootstrap.min.js"></script>
    <script src="/itravel/js-slide/bootstrap.bundle.min.js"></script>
</body>
</html>
