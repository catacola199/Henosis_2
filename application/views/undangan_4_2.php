<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dhika & Nofa Wedding</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
    rel="stylesheet">

  <!-- simplyCountdown -->
  <link rel="stylesheet" href="<?= base_url("assets/undangan_4/countdown/simplyCountdown.theme.default.css")?>" />
  <script src="<?= base_url("assets/undangan_4/countdown/simplyCountdown.min.js")?>"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="<?= base_url("assets/undangan_4/style_2.css")?>">
</head>

<body>

  <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
    <main>
      <h4>Kepada <span>Bapak/Ibu/Saudara/i, </span></h4>
      <h1 class="border-bottom border-4">Delviro & Sukma</h1>
      
      <p>08 . 12 . 2024</p>
      
      <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a>
    </main>

  </section>
    <nav class="navbar navbar-expand-md bg-body-tertiary sticky-top mynavbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Henosis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#info">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#story">Story</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#rsvp">RSVP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#gifts">Gift</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <section id="home" class="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2>The Happy Couple</h2>
        </div>
      </div>
      <div class="row couple">
        <div class="col-lg-4">
          <div class="row d-flex justify-content-center">           
            <img src="<?= base_url("assets/undangan_4/img/sandhika.png")?>" alt="Sandhika Galih" class="img-responsive rounded-circle img-fluid">
            <h3>Sandhika Galih</h3>
            <p>Putra dari Bpk. Lorem <br> dan <br> Ibu Ipsum</p>          
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <h4>&</h3>    
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="row d-flex justify-content-center">
            <img src="<?= base_url("assets/undangan_4/img/nofa.png")?>" alt="Nofariza" class="img-responsive rounded-circle img-fluid">
            <h3>Nofariza</h3>
            <p>Putra dari Bpk. Ipsum <br> dan <br> Ibu Lorem</p> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="simplycountdown" class="simplycountdown w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
      <div class="simply-countdown"></div>
  </section>

  <section id="info" class="info">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Informasi Acara</h2>
          <p class="alamat">Alamat: Gedung Kologdam, Kodiklat TNI AD. <br> Jl. Aceh, Merdeka, Kec. Sumur Bandung, Kota
            Bandung</p>
          <a href="https://goo.gl/maps/R9seweCadg9MNyox5" target="_blank" class="btn btn-light btn-sm my-3">Klik untuk
            membuka peta</a>  
          <div id="map"></div>
          <p class="description mt-3">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan namun tidak
            ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah tempat.</p>
        </div>
      </div>
     
      <div class="row justify-content-center mt-4">
        <div class="col-md-5 col-10">
          <div class="card text-center text-bg-light mb-5">
            <div class="card-header ">Akad Nikah</div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-clock d-block"></i>
                  <span>08.00 - 10.00</span>
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block "></i>
                  <span>Minggu, 20 November 2023</span>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
            </div>
          </div>
        </div>
        <div class="col-md-5 col-10">
          <div class="card text-center text-bg-light">
            <div class="card-header ">Resepsi</div>
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <i class="bi bi-clock d-block "></i>
                  <span>11.00 - selesai</span>
                </div>
                <div class="col-md-6">
                  <i class="bi bi-calendar3 d-block "></i>
                  <span>Minggu, 20 November 2023</span>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Bagaimana Cinta Kami Bersemi</span>
          <h2>Cerita Kami</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, similique non soluta nulla asperiores
            voluptatem.</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li>
              <div class="timeline-image" style="background-image: url(<?= base_url("assets/undangan_4/img/sman23.jpg")?>);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama Bertemu</h3>
                  <span>1 Juni 2000</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, modi autem? Commodi autem quo quia?
                  </p>
                </div>
              </div>

            </li>
            <li class="timeline-inverted">
              <div class="timeline-image" style="background-image: url(https://picsum.photos/300/300);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Mulai Serius</h3>
                  <span>1 Januari 2005</span>
                </div>
                <div class="timeline-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto enim eaque obcaecati odit
                    itaque explicabo quisquam quos at.
                  </p>
                </div>
              </div>

            </li>
            <li>
              <div class="timeline-image" style="background-image: url(https://picsum.photos/301/301);"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Tunangan</h3>
                  <span>7 November 2009</span>
                </div>
                <div class="timeline-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, deleniti distinctio. Esse quas sit
                  explicabo corporis magni qui expedita a.
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span>Memori Kisah Kami</span>
          <h2>Galeri Foto</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, itaque?</p>
        </div>
      </div>

      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
        <div class="col mt-3">
          <a href="img/gallery/1.png" data-toggle="lightbox" data-caption="Sandhika & Nofa 1" data-gallery="mygallery">
            <img src="<?= base_url("assets/undangan_4/img/gallery/thumbnail/1.png")?>" alt="Sandhika & Nofa 1" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/300/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 2"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/300/300/400" alt="Sandhika & Nofa 2" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/301/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 3"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/301/300/400" alt="Sandhika & Nofa 3" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/302/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 4"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/302/300/400" alt="Sandhika & Nofa 4" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/304/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 5"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/304/300/400" alt="Sandhika & Nofa 5" class="img-fluid w-100 rounded">
          </a>
        </div>
        <div class="col mt-3">
          <a href="https://picsum.photos/id/305/1200/768" data-toggle="lightbox" data-caption="Sandhika & Nofa 6"
            data-gallery="mygallery">
            <img src="https://picsum.photos/id/305/300/400" alt="Sandhika & Nofa 6" class="img-fluid w-100 rounded">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="rsvp" class="rsvp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <h2>Konfirmasi Kehadiran</h2>
          <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
        </div>
      </div>

      <form class="row row-cols-md-auto g-3 align-items-center justify-content-center" method="POST"
        action="https://script.google.com/macros/s/AKfycbyddFbEJRqwEeA6OmZAuNf0jw_B30ZUOS5qSDwlAKV_nurcW7H6osJx2ZWnIeTmPm_35g/exec"
        id="my-form">
        <div class="col-12">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="status" class="form-label">Konfirmasi</label>
            <select name="status" id="status" class="form-select">
              <option selected>Pilih salah satu</option>
              <option value="Hadir">Hadir</option>
              <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
          </div>
        </div>
        <div class="col-12" style="margin-top: 35px;">
          <button class="btn btn-primary">Kirim</button>
        </div>
      </form>

      

    </div>
  </section>

  <section id="gifts" class="gifts">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span class="text-gifts">ungkapan tanda kasih</span>
          <h2>Kirim Hadiah</h2>
          <p class="text-gifts">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iure perferendis provident ab aliquam nemo.
          </p>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="fw-bold">BCA</div>
              123456789 - Delviro
            </li>
            <li class="list-group-item">
              <div class="fw-bold">MANDIRI</div>
              987654321 - Delviro
            </li>
            <li class="list-group-item">
              <div class="fw-bold">Saweria</div>
              <img src="<?= base_url("assets/undangan_4/img/saweria.png")?>" alt="Saweria QR" class="img-thumbnail" width="150">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <small class="block text-gifts">&copy; 2024 Henosis. All Rights Reserved.</small>
          <small class="block text-gifts">Design by <a href="http://henosisstudio.com/">@Catacola</a>.</small>

          <ul class="mt-3">
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-youtube"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div id="audio-container">
    <audio id="song" autoplay loop>
      <source src="<?= base_url("assets/undangan_4/audio/save-and-sound.mp3")?>" type="audio/mp3">
    </audio>

    <div class="audio-icon-wrapper" style="display: none;">
      <i class="bi bi-disc"></i>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX-KHR_nWY7RL7iKgGZK6eKiP093KuFj0&callback=initMap"></script>

  <script>
    simplyCountdown('.simply-countdown', {
      year: 2023, // required
      month: 11, // required
      day: 20, // required
      hours: 8, // Default is 0 [0-23] integer
      words: { //words displayed into the countdown
        days: { singular: 'hari', plural: 'hari' },
        hours: { singular: 'jam', plural: 'jam' },
        minutes: { singular: 'menit', plural: 'menit' },
        seconds: { singular: 'detik', plural: 'detik' }
      },
    });

    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    key: "AIzaSyBX-KHR_nWY7RL7iKgGZK6eKiP093KuFj0",
    v: "weekly",
    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
    // Add other bootstrap parameters as needed, using camel case.
  });
  </script>

  <script>
    const stickyTop = document.querySelector('.sticky-top');
    const offcanvas = document.querySelector('.offcanvas');
    function initMap() {
      // Koordinat pusat peta
      var myLatLng = {lat: -6.2121413, lng: 107.0621871}; // Contoh koordinat Jakarta
      
      // Buat objek peta
      var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12, // Atur tingkat zoom
          center: myLatLng // Atur koordinat pusat peta
      });

      // Tambahkan marker
      var marker = new google.maps.Marker({
          position: myLatLng, // Atur koordinat marker
          map: map, // Tentukan peta tempat marker akan ditambahkan
          title: 'Hello World!' // Tentukan judul marker (opsional)
      });
    }

    

  </script>

  <script>
    const rootElement = document.querySelector(":root");
    const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
    const audioIcon = document.querySelector('.audio-icon-wrapper i');
    const song = document.querySelector('#song');
    let isPlaying = false;

    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function () {
        window.scrollTo(scrollTop, scrollLeft);
      }

      rootElement.style.scrollBehavior = 'auto';
    }

    function enableScroll() {
      window.onscroll = function () { }
      rootElement.style.scrollBehavior = 'smooth';
      // localStorage.setItem('opened', 'true');
      playAudio();
    }

    function playAudio() {
      song.volume = 0.1;
      audioIconWrapper.style.display = 'flex';
      song.play();
      isPlaying = true;
    }

    audioIconWrapper.onclick = function () {
      if (isPlaying) {
        song.pause();
        audioIcon.classList.remove('bi-disc');
        audioIcon.classList.add('bi-pause-circle');
      } else {
        song.play();
        audioIcon.classList.add('bi-disc');
        audioIcon.classList.remove('bi-pause-circle');
      }

      isPlaying = !isPlaying;
    }

    // if (!localStorage.getItem('opened')) {
    //   disableScroll();
    // }
    disableScroll();
  </script>
  <script>
    window.addEventListener("load", function () {
      const form = document.getElementById('my-form');
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const data = new FormData(form);
        const action = e.target.action;
        fetch(action, {
          method: 'POST',
          body: data,
        })
          .then(() => {
            alert("Konfirmasi kehadiran berhasil terkirim!");
          })
      });
    });

  </script>
  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const nama = urlParams.get('n') || '';
    const pronoun = urlParams.get('p') || 'Bapak/Ibu/Saudara/i';
    const namaContainer = document.querySelector('.hero h4 span');
    namaContainer.innerText = `${pronoun} ${nama},`.replace(/ ,$/, ',');

    document.querySelector('#nama').value = nama;
  </script>
</body>

</html>