<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TemplateMo - Strip Bootstrap 4.0 HTML CSS Layout</title>
<!--

TemplateMo 482 Strip

https://templatemo.com/tm-482-strip

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400">   <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="bootstrap/css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        <div class="container tm-container">
            
        <div class="row navbar-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navbar-container">
                    
                    <a href="javascript:void(0)" class="navbar-brand" id="go-to-top">
                        <img src="bootstrap/img/logo.png" alt="Logo" style="width: 50px;">
                        <span style="font-size: 16px;">Pusat Kegiatan Belajar Masyarakat</span>
                    </a>

                    
                    <nav class="navbar navbar-full">
                        
                        <div class="collapse navbar-toggleable-md" id="tmNavbar">                            

                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-1">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-2">Lokasi belajar</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Daftar Murid Baru
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#kelulusan">Kelulusan</a>
                                        <a class="dropdown-item" href="#wawancara">Wawancara</a>
                                    </div>
                                </li>
                                <li class="nav-item profile-item">
                                <a class="nav-link external" rel="nofollow" href="">
                                    <i class="fas fa-user-circle"></i>
                                    <span>Profil</span>
                                </a>
                            </li>
                            </ul>

                        </div>

                    </nav>    
                    
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    
                </div>
            </div>

            
            
            <div class="tm-page-content">
            <!-- Login Form -->
                <section id="tm-section-login" class="row tm-section" style="background-color: red;">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
                        <h2 class="tm-section-header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Data Calon Peserta Didik</h2>
                        <form action="index.html" method="post" class="daftar-form">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-contact-form-left">
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Nama Lengkap" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required/>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" name="jenjang" id="jenjang" required>
                                        <option value="">Pilih Jenjang</option>
                                        <option value="TK">TK</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="jalur" id="jalur" required>
                                        <option value="">Pilih Jalur</option>
                                        <option value="Reguler">Zonasi</option>
                                        <option value="Prestasi">Prestasi</option>
                                        <option value="Prestasi">Pindah Tugas Ortu</option>
                                        <option value="Prestasi">Afirmasi</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" id="agama" name="agama" class="form-control" placeholder="Agama" required/>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="nisn" name="nisn" class="form-control" placeholder="NISN" required/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="nik" name="nik" class="form-control" placeholder="NIK" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-contact-form-right">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" required/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="titik_koordinat" name="titik_koordinat" class="form-control" placeholder="Titik Koordinat" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-control" placeholder="Sekolah Asal" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control" placeholder="Nama Orang Tua / Wali" required/>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" id="nik_orang_tua" name="nik_orang_tua" class="form-control" placeholder="NIK Orang Tua / Wali" required/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" id="email_orang_tua" name="email_orang_tua" class="form-control" placeholder="Email Orang Tua / Wali" required/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" id="kecamatan_orang_tua" name="kecamatan_orang_tua" class="form-control" placeholder="Kecamatan / ZONA Orang Tua / Wali" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" class="form-control" placeholder="Pekerjaan Orang Tua / Wali" required/>
                                </div>
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary" id="nextButton" onclick="window.location.href='/daftar2'">Selanjutnya</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- footer -->
                <footer class="row tm-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <p class="text-xs-center tm-footer-text">Copyright &copy; 2020 Company Name - Design: TemplateMo</p>
                    </div>
                </footer>
            </div>


             
        </div> <!-- .container -->
        
        <!-- load JS files -->
        
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="bootstrap/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="bootstrap/js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <!-- Templatemo scripts -->
        <script>     

        var bigNavbarHeight = 90;
        var smallNavbarHeight = 68;
        var navbarHeight = bigNavbarHeight;                 
    
        $(document).ready(function(){

            var topOffset = 180;

            $(window).scroll(function(){
               
                if($(this).scrollTop() > topOffset) {
                    $(".navbar-container").addClass("sticky");
                }
                else {
                    $(".navbar-container").removeClass("sticky");
                }

            });

            /* Single page nav
            -----------------------------------------*/

            if($(window).width() < 992) {
                navbarHeight = smallNavbarHeight;
            }

            $('#tmNavbar').singlePageNav({
               'currentClass' : "active",
                offset : navbarHeight,
                filter: ':not(.external)'
            });


            /* Collapse menu after click 
               http://stackoverflow.com/questions/14203279/bootstrap-close-responsive-menu-on-click
            ----------------------------------------------------------------------------------------*/

            $('#tmNavbar').on("click", "a", null, function () {
                $('#tmNavbar').collapse('hide');               
            });

            // Handle nav offset upon window resize
            $(window).resize(function(){
                if($(window).width() < 992) {
                    navbarHeight = smallNavbarHeight;
                } else {
                    navbarHeight = bigNavbarHeight;
                }

                $('#tmNavbar').singlePageNav({
                    'currentClass' : "active",
                    offset : navbarHeight,
                    filter: ':not(.external)'
                });
            });
            

            /*  Scroll to top
                http://stackoverflow.com/questions/5580350/jquery-cross-browser-scroll-to-top-with-animation
            --------------------------------------------------------------------------------------------------*/
            $('#go-to-top').each(function(){
                $(this).click(function(){ 
                    $('html,body').animate({ scrollTop: 0 }, 'slow');
                    return false; 
                });
            });
            
        });
    
        </script>             

    </body>
    </html>