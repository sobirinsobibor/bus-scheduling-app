<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Travel Rent Form</title>
    <link rel="stylesheet" href="/itravel/css-slide/bootstrap.min.css">
    <link rel="stylesheet" href="/itravel/css-slide/style.css">
    <link rel="stylesheet" href="/itravel/css/cssku.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top p-3" style="background-color: #252C6A;">
                <div class="container">
                    <img class="me-3" src="/itravel/assets/logo unair fix trans.png" alt="Logo Unair" width="50px">
                    <a class="navbar-brand" href="/home" style="color: #FFEA7A;"><h3>I-Travel</h3></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse righting" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #FFEA7A;" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #FFEA7A;" href="/rentform">Peminjaman</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link" style="color: #FFEA7A;" href="#footer">Notifikasi</a>
                        </li>
                        <li>
                            <div class="hidden fixed top-0 right-0 sm:block">
                                    <li class="nav-item dropdown d-flex">
                                        <img class="centering mt-1 me-1" src="data:image/png;base64,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" alt="" style="border-radius: 50%; height:30px;">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>User 123
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">Profil</a>
                                        <a class="dropdown-item" href="">Riwayat Peminjaman</a>
                                        <a class="dropdown-item" href="/">Keluar</a>
                                        <form id="logout-form" action="" method="POST" class="d-none">
                                        </form>
                                    </li>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>
              </nav>

              <div class="container p-5">
                <div class="text-center">
                    <h1 class="border-bottom border-secondary p-2" style="color: #252C6A;">Form Peminjaman Bus Universitas Airlangga</h1>
                </div>
                <div class="container px-3 mt-5 centering">
                    <div class="card p-3" style="width: 90%;">
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">No Surat</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor surat">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Nama</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Asal Instansi</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan asal instansi">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-auto">
                                        <label for="" class="form-label">Waktu Peminjaman Awal</label>
                                        <input name="app_date" type="date" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label for="" class="form-label">Waktu Peminjaman Akhir</label>
                                        <input name="app_date" type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tujuan</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan tujuan perjalanan">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Surat izin</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                              </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #252C6A;">Ajukan Peminjaman</button>
                          </form>
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
