@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTOPOLIO </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/boo"></script>
    <style type="text/css">
        body{
            font-family: Arial;
        }
        #projects{
            background-color: rgb(218, 183, 218);
        }
        .form-label>span{
            color: violet;
        }
    </style>
</head>
<body>

    <!--NavBar-->
    <nav class=" navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Siti ikrima</a>
            <button class="navbar-toggle" type="button" data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar_toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
  <!--Akhie navbar-->
  <!-- home -->
  <section id="home" class="pt-5">
    <div class="container-fluid p-0">
        <div class="p-5 text-bg-light text-center">
            <img src="/storage/{{ $item->foto }}" alt="" width="200" class="rounded-circle img-thumbnail" srcset="">
            <h2 class="mt-3 fw-bold">{{$item->nama}}</h2>
            <p class="fs-5">pelajar</p>
        </div>
    </div>
  </section>
  <!-- Akhir home -->
  <!-- aboutme -->
  <section id="about" class="pt-5">
    <div class="container">
        <div class="p-10 text-center">
            <h3 class="fw-bold mb-3">About me</h3>
              <div class="" >
                 <p > Antariksawan (lazim disebut astronaut) adalah sebutan bagi orang yang telah menjalani
                     latihan dalam program penerbangan antariksa manusia untuk memimpin,
                    menerbangkan pesawat, atau menjadi awakpesawat antariksa. </p>
             </div>
             <div class="">
                <p>{{$item->deskripsi}}</p>
             </div>
        </div>
    </div>
  </section>
  <!-- akhir about -->

  <!-- my Project -->
   <section id="projects" class="pt-5">
     -<div class="container">
        <div class="p-5 text-bg-light text-center">
            <h3 class="fw-bold mb-3"> My Projects</h3>
            <div class="row justify-content-center">
             @foreach ($portofolio as $key => $item)

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/Fire-Chicken.jpg" class="card-img-top" alt="gambar1">
                        <div class="card-body">
                            <p>Ayam goreng yang satu ini lain dari pada yang lain karena dicelup ke dalam saus BBQ. Tak tanggung-tanggung, saus BBQ tersebut menawarkan cita rasa pedas. Ada level saus BBQ yang bisa kamu pilih, yakni mulai level 1 sampai 5. Semakin besar jumlah angkanya semakin pedas pula rasa sausnya.
                                Untuk menetralisir rasa pedasnya, Fire Chicken disajikan dengan saus keju yang gurih. Cocol Fire Chicken-nya ke dalam saus keju yang tersedia dan nikmati bersama dengan nasi putih hangat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/storage/{{$item->foto}}" width="150">

                        <img src="img/rich-burger_.webp" alt="gambar 2">
                        <div class="card-body">
                            <p>{{$item->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/Pink-Lava.jpg" alt="gabar3">
                        <div class="card-body">
                            <p>Selain es krim ternyata ada juga minuman dengan varian Pink Lava. Sejak kemunculannya pertama kali, Pink Lava langsung menjadi menu minuman terfavorit di Richeese Factory. Susu stroberi yang kental ini memang cocok banget dipesan sebagai minuman pendamping saat menyantap menu-menu pedas di Richeese Factory.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/snow-white-gravy_.webp" class="card-img-top" alt="gambar4">
                        <div class="card-body">
                            <p>Snow White Gravy adalah menu Richeese paling enak yang berupa kentang goreng dengan perpaduan white gravy yang gurih. For your information, gravy sendiri merupakan salah satu jenis saus yang umumnya terbuat dari lemak daging yang dihasilkan dari proses memasak.
                                Selain disajikan dengan gravy, kentang gorengnya juga dibubuhi dengan kulit ayam yang crispy. Kamu juga bisa mencicipi menu unik ini dengan saus keju khas Richeese.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div> --}}
    </div>
  </section>
  <!-- akhir project -->
  <!-- awal Contact -->
  <section>
    <div id="contact" class="pt-5">
        <div class="container">
            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">contact me</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="#contact" method="post" id="form-contact">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap <span>*</span></label>
                                <input type="text" class="form-control" name="text" id="text" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span>*</span></label>
                                <input type="text" class="form-control" name="email" id="email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Alamat <span>*</span></label>
                                <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  {{-- <footer class="bg-dark text-white text-center pb-5">
    <p>&copy; Smk ypc @2023<i class="bi bi-heart-fill text-danger"></i> <a class="text-white text-decoration-none fw-bold" href="https://www.instagram.com/devitaa_se/">Evita Selviani</a></p>
</footer> --}}

</body>
</html>
