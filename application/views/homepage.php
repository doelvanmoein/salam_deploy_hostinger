<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.png') ?>">
    <title>SALAM - Sistem Akses Layanan Menyeluruh Kantor Kementerian Agama Kota Sawahlunto</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .header-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 100px 20px;
            background: rgba(0, 0, 0, 0.5); /* Transparansi untuk meningkatkan keterbacaan */
        }
        .content {
            flex: 1;
        }
        .icon-box {
            text-align: center;
            padding: 20px;
            transition: background-color 0.3s;
        }
        .icon {
            font-size: 40px;
            color: #007bff;
        }
        .icon-box:hover {
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        a{
            text-decoration: none;
            color:var(--bs-heading-color);
        }
    </style>
</head>
<body>
    <video class="video-background" autoplay muted loop disablePictureInPicture controlsList="nodownload">
        <source src="<?= base_url('assets/video/bg_homepage_salam.mp4') ?>" type="video/mp4" style="filter: brightness(30%); background-color: rgba(0,0,0,0.25);">
        Your browser does not support HTML5 video.
    </video>

    <header class="header-content">
        <img src="http://localhost/_kemenag_sawahlunto/SALAM/v1/assets/logo/salam_v5.png" style="width: 25%;" alt="">
    </header>



    <div class="content container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="icon-box">
                    <a href="https://sawahluntokota.kemenag.go.id/" target="_blank">
                        <img src="<?= base_url('assets/images/web-link.png') ?>" style="width: 125px;" alt="Website" class="icon">
                        <h5 class="mt-4">Portal Berita</h5>
                    </a>
                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box">
                    <a href="https://ptspsawahluntokota.kemenag.go.id" target="_blank">
                        <img src="<?= base_url('assets/images/public-services.png') ?>" style="width: 125px;" alt="PTSP" class="icon">
                        <h5 class="mt-4">PTSP</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box">
                    <a href="https://rumahibadah.kemenagsawahlunto.com/" target="_blank">
                        <img src="<?= base_url('assets/images/worship-building.png') ?>" style="width: 125px;" alt="Layanan Informasi Rumah Ibadah" class="icon">
                        <h5 class="mt-4">Layanan Informasi Rumah Ibadah</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box">
                    <a href="#" target="_blank">
                        <img src="<?= base_url('assets/images/religion-edu.png') ?>" style="width: 125px;" alt="Layanan Informasi Pendidikan Agama" class="icon">
                        <h5 class="mt-4">Layanan Informasi Pendidikan Agama</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box">
                    <a href="#" target="_blank">
                        <img src="<?= base_url('assets/images/analysis.png') ?>" style="width: 125px;" alt="Data Statistik" class="icon">
                        <h5 class="mt-4">Data Statistik</h5>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="icon-box">
                    <a href="https://kinerja.kemenagsawahlunto.com" target="_blank">
                        <img src="<?= base_url('assets/images/report.png') ?>" style="width: 125px;" alt="Sistem Pelaporan Kinerja Bulanan" class="icon">
                        <h5 class="mt-4">Sistem Pelaporan Kinerja Bulanan</h5>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="icon-box">
                    <a href="#" target="_blank">
                        <img src="<?= base_url('assets/images/surveys.png') ?>" style="width: 125px;" alt="Survey Pelayanan" class="icon">
                        <h5 class="mt-4">Survei Pelayanan</h5>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="icon-box">
                    <a href="<?= base_url('home/social_media') ?>" target="_blank">
                        <img src="<?= base_url('assets/images/social-media2.png') ?>" style="width: 125px;" alt="Media Sosial" class="icon">
                        <h5 class="mt-4">Media Sosial</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6722db7b4304e3196adaed57/1ibg2imvv';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


    <footer class="text-center">
        <p>&copy; 2024 Kantor Kementerian Agama Kota Sawahlunto | All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>

