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
                                    <a class="dropdown-item" href="/detailw">Wawancara</a>
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
                <section id="tm-section-login" class="row tm-section">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
                        <h2 class="tm-section-header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Data Calon Peserta Didik</h2>
                        <form action="index.html" method="post" class="daftar-form">
                            <!-- Existing form fields here -->
                            
                            <!-- Jadwal Wawancara Section -->
                            <div class="form-group">
                                <h3>Jadwal Wawancara</h3>
                                <label for="tanggal">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" required/>
                                
                                <label for="waktu">Waktu</label>
                                <input type="time" id="waktu" name="waktu" class="form-control" required/>
                                
                                <label>Apakah Anda Dapat Hadir?</label>
                                <div>
                                    <button type="button" class="btn btn-primary" onclick="window.location.href='/detailw'">Ya</button>
                                    <button type="button" class="btn btn-primary" id="noButton" onclick="showConfirmationModal()">Tidak</button>    
                                    <input type="hidden" id="kehadiran" name="kehadiran" required>
                                </div>
                            </div>
                            
                            <!-- Existing form fields here -->
                        
                        </form>
                    </div>
                </section>
                <!-- Modal untuk konfirmasi ketika memilih "Tidak" -->
                <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Kehadiran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin tidak dapat hadir ke wawancara?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" id="confirmNo">Ya, Tetap Tidak Bisa Hadir</button>
                            </div>
                        </div>
                    </div>
                </div>
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
    function showConfirmationModal() {
        $('#konfirmasiModal').modal('show');
    }
    
    // Event listener untuk tombol "Tidak"
    document.getElementById('noButton').addEventListener('click', function() {
        showConfirmationModal();
    });

    // Event listener untuk tombol "Ya, Tetap Tidak Bisa Hadir"
    document.getElementById('confirmNo').addEventListener('click', function() {
        // Tutup modal
        $('#konfirmasiModal').modal('hide');
        // Simpan nilai "tidak" ke dalam input tersembunyi
        document.getElementById('kehadiran').value = 'tidak';
        // Kirim formulir
        document.querySelector('.daftar-form').submit();
    });

    var style = document.createElement('style');
    style.innerHTML = `
        .modal-title,
        .modal-body {
            color: black;
        }
    `;
    document.head.appendChild(style);

    </script>             

</body>
</html>
