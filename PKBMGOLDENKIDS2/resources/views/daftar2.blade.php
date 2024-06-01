<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TemplateMo - Strip Bootstrap 4.0 HTML CSS Layout</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400">   <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> <!-- Bootstrap style -->
    <link rel="stylesheet" href="bootstrap/css/templatemo-style.css"> <!-- Templatemo style -->
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
            <section id="tm-section-login" class="row tm-section" style="background-color: red;">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
                    <h2 class="tm-section-header col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Data Calon Peserta Didik</h2>
                    <form action="index.html" method="post" class="daftar-form">
                        <div class="form-group">
                            <label for="jenjang">Pilih Jenjang</label>
                            <select class="form-control" name="jenjang" id="jenjang" required>
                                <option value="">Pilih Jenjang</option>
                                <option value="TK">TK</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                            </select>
                        </div>
                        <div class="form-group" id="tkInput" style="display: none;">
                            <label for="tkTujuan">Pilih TK Tujuan</label>
                            <input type="text" id="tkTujuan" name="tkTujuan" class="form-control" placeholder="Masukkan TK Tujuan"/>
                        </div>
                        <div class="form-group" id="sdInput" style="display: none;">
                            <label for="sdTujuan">Pilih SD Tujuan</label>
                            <input type="text" id="sdTujuan" name="sdTujuan" class="form-control" placeholder="Masukkan SD Tujuan"/>
                        </div>
                        <div class="form-group" id="smpInput" style="display: none;">
                            <label for="smpTujuan">Pilih SMP Tujuan</label>
                            <input type="text" id="smpTujuan" name="smpTujuan" class="form-control" placeholder="Masukkan SMP Tujuan"/>
                        </div>

                        <div class="form-group">
                            <label for="jalur">Pilih Jalur Pendaftaran</label>
                            <select class="form-control" name="jalur" id="jalur" required>
                                <option value="">Pilih Jalur</option>
                                <option value="zonasi">Zonasi</option>
                                <option value="pindah">Pindah Tugas Orang Tua</option>
                                <option value="afirmasi">Afirmasi</option>
                                <option value="prestasi">Prestasi</option>
                            </select>
                        </div>
                        <div class="form-group" id="zonasiInput" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="akta">Akta Kelahiran</label>
                                    <input type="file" id="akta" name="akta" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="kk">Kartu Keluarga</label>
                                    <input type="file" id="kk" name="kk" class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ktp">KTP Orang Tua</label>
                                    <input type="file" id="ktp" name="ktp" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="pindahInput" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="akta">Akta Kelahiran</label>
                                    <input type="file" id="akta" name="akta" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="kk">Kartu Keluarga</label>
                                    <input type="file" id="kk" name="kk" class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ktp">KTP Orang Tua</label>
                                    <input type="file" id="ktp" name="ktp" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="suratPindah">Surat Pindah Orang Tua</label>
                                    <input type="file" id="suratPindah" name="suratPindah" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="afirmasiInput" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="akta">Akta Kelahiran</label>
                                    <input type="file" id="akta" name="akta" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="kk">Kartu Keluarga</label>
                                    <input type="file" id="kk" name="kk" class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ktp">KTP Orang Tua</label>
                                    <input type="file" id="ktp" name="ktp" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="sktm">Surat Keterangan Tidak Mampu</label>
                                    <input type="file" id="sktm" name="sktm" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="prestasiInput" style="display: none;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="akta">Akta Kelahiran</label>
                                    <input type="file" id="akta" name="akta" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="kk">Kartu Keluarga</label>
                                    <input type="file" id="kk" name="kk" class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ktp">KTP Orang Tua</label>
                                    <input type="file" id="ktp" name="ktp" class="form-control"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="nilai">Akumulasi Nilai</label>
                                    <input type="file" id="nilai" name="nilai" class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="sertifikat">Sertifikat Penghargaan</label>
                                    <input type="file" id="sertifikat" name="sertifikat" class="form-control"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='/jadwal'">simpan</button>
                        </div>
                    </form>
                </div>
            </section>
            <footer class="row tm-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p class="text-xs-center tm-footer-text">Copyright &copy; 2020 Company Name - Design: TemplateMo</p>
                </div>
            </footer>
        </div>
    </div>
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.singlePageNav.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#jenjang').change(function(){
                var selectedValue = $(this).val();
                $('#tkInput').hide();
                $('#sdInput').hide();
                $('#smpInput').hide();

                if(selectedValue === 'TK'){
                    $('#tkInput').show();
                } else if(selectedValue === 'SD'){
                    $('#sdInput').show();
                } else if(selectedValue === 'SMP'){
                    $('#smpInput').show();
                }
            });

            $('#jalur').change(function(){
                var selectedValue = $(this).val();
                $('#zonasiInput').hide();
                $('#pindahInput').hide();
                $('#afirmasiInput').hide();
                $('#prestasiInput').hide();

                if(selectedValue === 'zonasi'){
                    $('#zonasiInput').show();
                } else if(selectedValue === 'pindah'){
                    $('#pindahInput').show();
                } else if(selectedValue === 'afirmasi'){
                    $('#afirmasiInput').show();
                } else if(selectedValue === 'prestasi'){
                    $('#prestasiInput').show();
                }
            });
        });
    </script>
</body>
</html>
