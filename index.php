<?php

function get_curl($url)
{
  $curl = curl_init();
  //  ? Curl Opsi
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  // ? curl execute
  $result = curl_exec($curl);
  // ? curl close /  tutup
  curl_close($curl);
  return  json_decode($result, true);
}

// profile youtube windah
$result = get_curl('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCoIiiHof6BJ85PLuLkuxuhw&key=AIzaSyC56pD-WMHmZLWc54i9NXh6pfUv92eTPbE');

$youtubeprofilewindah = $result["items"][0]['snippet']['thumbnails']['medium']['url'];
$windahtitle = $result['items'][0]['snippet']['title'];
$windahsubscriber = $result['items'][0]['statistics']['subscriberCount'];

// Latest Video windah
$result = get_curl('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCoIiiHof6BJ85PLuLkuxuhw&maxResults=6&order=date&key=AIzaSyC56pD-WMHmZLWc54i9NXh6pfUv92eTPbE');

$resultwindah = $result['items'];
// profile youtube wpu
$result = get_curl('https://www.googleapis.com/youtube/v3/channels?key=AIzaSyC56pD-WMHmZLWc54i9NXh6pfUv92eTPbE&part=snippet,statistics&id=UCkXmLjEr95LVtGuIm3l2dPg');

$youtubeprofilewpu = $result["items"][0]['snippet']['thumbnails']['medium']['url'];
$wputitle = $result['items'][0]['snippet']['title'];
$wpusubscriber = $result['items'][0]['statistics']['subscriberCount'];

// Latest Video wpu
$result = get_curl('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCkXmLjEr95LVtGuIm3l2dPg&maxResults=6&order=date&key=AIzaSyC56pD-WMHmZLWc54i9NXh6pfUv92eTPbE');

$resultwpu = $result['items'];







?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portofolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/mystyle.css" />
</head>

<body id="home">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold"  href="#">Bima Arya Wicaksana</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link"  aria-current="page" href="#home">Home</a>
          <a class="nav-link"  href="#about">About</a>
          <a class="nav-link"  href="#mfyt">MFYT</a>
          <a class="nav-link"  href="#contact">Contact</a>
        </div>

        <div class="form-check form-switch form-check-reverse d-flex align-items-center  ms-1 ms-sm-1 ms-md-1 ms-lg-3">
        <input class="form-check-input dark-button" type="checkbox" id="flexSwitchCheckReverse" />
        </div>
      </div>
    </div>
  </nav>
  <section class="first-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-4">
          <h1 class="mt-5 fw-bold first-up primary" data-aos="fade-up" data-aos-duration="1000" >Halo👋</h1>
          <h2 class="mb-3  fw-bold first-up primary" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" >
            Selamat datang di website saya
          </h2>
          <p class="fs-5 short-desc mb-4 first-up p1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <small class="fs-2 fw-bold">P</small>erkenalkan nama saya
            <span  class="fw-semibold primary first-span">Bima Arya Wicaksana</span>
            saya tinggal di Depok lohhh... dan saya menempuh pendidikan di
            Universitas Pamulang saya mengambil jurusan Informatics
            Engineering atau biasa di sebut teknik Informatika hehehe...
          </p>
          <a href="#about" class="btn first-up secondary btn-custom" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style=" color: white">Readmore ...</a>
        </div>
        <div class="col-lg-6 position-relative overflow-hidden" data-aos="zoom-out" data-aos-duration="1500">
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="img-fluid svg-1">
            <path fill="#4E49E8" d="M26.2,-51.1C32.6,-41.6,35.6,-32,46,-23.4C56.3,-14.9,74,-7.4,80.2,3.6C86.4,14.6,81.2,29.3,70.3,36.8C59.4,44.4,42.9,45,30.2,52.8C17.5,60.7,8.8,75.8,-2.1,79.5C-13,83.1,-25.9,75.2,-34.8,65.2C-43.6,55.1,-48.4,42.9,-57.8,31.7C-67.3,20.5,-81.4,10.2,-80.5,0.5C-79.6,-9.2,-63.6,-18.3,-53.5,-28.5C-43.5,-38.6,-39.3,-49.7,-31.3,-58.4C-23.4,-67,-11.7,-73.3,-0.9,-71.7C9.9,-70.1,19.7,-60.7,26.2,-51.1Z" transform="translate(100 100)" />
          </svg>
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="img-fluid svg-2">
            <path fill="#ee82ee" d="M26.2,-51.1C32.6,-41.6,35.6,-32,46,-23.4C56.3,-14.9,74,-7.4,80.2,3.6C86.4,14.6,81.2,29.3,70.3,36.8C59.4,44.4,42.9,45,30.2,52.8C17.5,60.7,8.8,75.8,-2.1,79.5C-13,83.1,-25.9,75.2,-34.8,65.2C-43.6,55.1,-48.4,42.9,-57.8,31.7C-67.3,20.5,-81.4,10.2,-80.5,0.5C-79.6,-9.2,-63.6,-18.3,-53.5,-28.5C-43.5,-38.6,-39.3,-49.7,-31.3,-58.4C-23.4,-67,-11.7,-73.3,-0.9,-71.7C9.9,-70.1,19.7,-60.7,26.2,-51.1Z" transform="translate(100 100)" />
          </svg>
          <img src="img/2.png" class="img-jumbo position-absolute" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 card-intro mb-4">
          <div class="card p-4">
            <img src="img/handshake.png" class="mt-5 mb-3 mx-auto" style="width: 80px; height: 80px" alt="..." />
            <div class="card-body">
              <h4 class="text-center title-section">Friendly</h4>
              <p class="card-text" style="text-align: justify;">
                Bisa di ajak kerjasama, dan mudah bersahabat apalagi kalo yang mengajak dengan kebaikan seru banget tuh hehehe...
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 card-intro mb-4">
          <div class="card p-4">
            <img src="img/heart.png" class="mt-5 mb-3 mx-auto" style="width: 80px; height: 80px" alt="..." />
            <div class="card-body">
              <h4 class="text-center title-section">Love Peace</h4>
              <p class="card-text" style="text-align: justify;">
                Cinta damai bro..ga suka keributan, dan yang paling penting cinta dengan doi hehehe...
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 card-intro mb-4">
          <div class="card p-4">
            <img src="img/maloik.png" class="mt-5 mb-3 mx-auto" style="width: 80px; height: 80px" alt="..." />
            <div class="card-body">
              <h4 class="text-center title-section">Cheerful</h4>
              <p class="card-text" style="text-align: justify;">
                Selalu happy walaupun ga punya duit and selalu skuyy livingssss dude.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-1" id="about">
    <div class="container">
      <div class="row mt-5 mb-3">
        <div class="col">
          <h1 class="text-center title-section fw-semibold" data-aos="fade-down" data-aos-duration="1000">About Me</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 position-relative overflow-hidden" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="img-fluid svg-1">
            <path fill="#4E49E8" d="M26.2,-51.1C32.6,-41.6,35.6,-32,46,-23.4C56.3,-14.9,74,-7.4,80.2,3.6C86.4,14.6,81.2,29.3,70.3,36.8C59.4,44.4,42.9,45,30.2,52.8C17.5,60.7,8.8,75.8,-2.1,79.5C-13,83.1,-25.9,75.2,-34.8,65.2C-43.6,55.1,-48.4,42.9,-57.8,31.7C-67.3,20.5,-81.4,10.2,-80.5,0.5C-79.6,-9.2,-63.6,-18.3,-53.5,-28.5C-43.5,-38.6,-39.3,-49.7,-31.3,-58.4C-23.4,-67,-11.7,-73.3,-0.9,-71.7C9.9,-70.1,19.7,-60.7,26.2,-51.1Z" transform="translate(100 100)" />
          </svg>
          <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="img-fluid svg-2">
            <path fill="#ee82ee" d="M26.2,-51.1C32.6,-41.6,35.6,-32,46,-23.4C56.3,-14.9,74,-7.4,80.2,3.6C86.4,14.6,81.2,29.3,70.3,36.8C59.4,44.4,42.9,45,30.2,52.8C17.5,60.7,8.8,75.8,-2.1,79.5C-13,83.1,-25.9,75.2,-34.8,65.2C-43.6,55.1,-48.4,42.9,-57.8,31.7C-67.3,20.5,-81.4,10.2,-80.5,0.5C-79.6,-9.2,-63.6,-18.3,-53.5,-28.5C-43.5,-38.6,-39.3,-49.7,-31.3,-58.4C-23.4,-67,-11.7,-73.3,-0.9,-71.7C9.9,-70.1,19.7,-60.7,26.2,-51.1Z" transform="translate(100 100)" />
          </svg>
          <img src="img/1.png" class="img-jumbo2 position-absolute" alt="" />
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col d-flex align-items-center">
              <p class="mt-5" style="text-align: justify;" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700">Seperti yan dikatakan saya tadi saat di atas. Saya seorang mahasiswa Universitas Pamulang dengan jurusan IT saya sedang berada di semester 6 sekarang. Ternyata masuk IT seru juga yah...selain berdampingan dengan code-code atau yang disebut coding. ternyata masuk IT juga mengajarkan arti kehidupan juga loh..melatih kesabaran salah satunya dan yang paling penting dapat membantu memahami bahasa perempuan wkwkwkwk.... </p>
            </div>
          </div>
          <div class="row mb-4 mt-2">
            <div class="col" data-aos="fade-down" data-aos-duration="1000">
              <h4 class="title-section">My Hobbies</h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 card-hobby p-2">
              <div class="inner-card w-100 px-2 py-1  rounded   d-flex align-items-center">
                <img src="img/restaurant.png" style="width: 40px; height: 40px;" alt="">
                <p class="ms-2 mt-2 fw-bold third" style="font-size: 15px;">Makan</p>
              </div>
            </div>
            <div class="col-md-4 card-hobby p-2">
              <div class="inner-card w-100 px-2 py-1  rounded   d-flex align-items-center">
                <img src="img/playstation.png" style="width: 40px; height: 40px;" alt="">
                <p class="ms-2 mt-2 fw-bold third" style="font-size: 15px;">Main Game</p>
              </div>
            </div>
            <div class="col-md-4 card-hobby p-2">
              <div class="inner-card w-100 px-2 py-1  rounded   d-flex align-items-center">
                <img src="img/programing.png" style="width: 40px; height: 40px;" alt="">
                <p class="ms-2 mt-2 fw-bold third" style="font-size: 15px;">Coding</p>
              </div>
            </div>
            <div class="col-md-4 card-hobby p-2">
              <div class="inner-card w-100 px-2 py-1  rounded   d-flex align-items-center">
                <img src="img/television.png" style="width: 40px; height: 40px;" alt="">
                <p class="ms-2 mt-2 fw-bold third" style="font-size: 15px;">Movie</p>
              </div>
            </div>
            <div class="col-md-4 card-hobby p-2">
              <div class="inner-card w-100 px-2 py-1  rounded   d-flex align-items-center">
                <img src="img/sleeping.png" style="width: 40px; height: 40px;" alt="">
                <p class="ms-2 mt-2 fw-bold third" style="font-size: 15px;">Sleep</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="" id="mfyt">
    <div class="container">
      <div class="row row mt-5 mb-3">
        <div class="col">
          <h1 class="text-center title-section fw-semibold" data-aos="fade-down" data-aos-duration="1000">My Favorite Youtuber</h1>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-6  p-4">
          <div class="row mt-3" data-aos="fade-right" data-aos-duration="500"  data-aos-delay="100">
            <div class="col-md-3">
              <img src="<?= $youtubeprofilewpu; ?>" class="w-100 rounded-circle img-thumbnail" alt="">
            </div>
            <div class="col">
              <h5 class="mt-4  mt-sm-4 mt-md-2 mt-lg-2 text-center text-sm-center text-md-start text-lg-start"><?= $wputitle; ?></h5>
              <h6 class="text-center text-sm-center text-md-start text-lg-start"><?= $wpusubscriber; ?> <span class="text-muted ">subscribers</span></h6>
            </div>
          </div>
          <div class="row mt-5">
            <?php foreach ($resultwpu as $rw) : ?>
              <div class="col-md-4 p-2 card-wpu">
                <iframe src="https://www.youtube.com/embed/<?= $rw['id']['videoId']; ?>" title="YouTube video" allowfullscreen style="width: 100%; height: 100%;"></iframe>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-lg-6  p-4">
          <div class="row mt-3" data-aos="fade-right" data-aos-duration="500"  data-aos-delay="500">
            <div class="col-md-3">
              <img src="<?= $youtubeprofilewindah; ?>" class="w-100 rounded-circle img-thumbnail" alt="">
            </div>
            <div class="col">
              <h5 class="mt-4  mt-sm-4 mt-md-2 mt-lg-2 text-center text-sm-center text-md-start text-lg-start"><?= $wputitle; ?></h5>
              <h6 class="text-center text-sm-center text-md-start text-lg-start"><?= $windahsubscriber; ?> <span class="text-muted">subscribers</span></h6>
            </div>
          </div>
          <div class="row mt-5">
            <?php foreach ($resultwindah as $rw) : ?>
              <div class="col-md-4 p-2 card-windah">
                <iframe src="https://www.youtube.com/embed/<?= $rw['id']['videoId']; ?>" title="YouTube video" allowfullscreen style="width: 100%; height: 100%;"></iframe>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="section-1" id="contact">
    <div class="container">
      <div class="row row mt-5 mb-3">
        <div class="col">
          <h1 class="text-center title-section fw-semibold" data-aos="fade-down" data-aos-duration="1000">Contact Me</h1>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4  p-4" data-aos="fade-up" data-aos-duration="1000">
          <img src="img/media.png" class="w-100" alt="">
        </div>
        <div class="col-lg-7  p-4">
          <form>
            <div class="mb-3 input-form">
              <label for="exampleFormControlInput1" class="form-label third">Nama :</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3 input-form">
              <label for="exampleFormControlTextarea1" class="form-label third">Pesan : </label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn  w-100 text-white input-form secondary btn-custom" >Kirim</button>
          </form>
        </div>

      </div>
    </div>
  </section>
  <footer class=" py-2 d-flex justify-content-center align-items-center" style="background-color: #4E49E8;">
    <div class="wrap-text mt-2">
      <p class="text-white">Made with <span style="color:red;">❤</span>.Developer by <a href="https://instagram.com/wicaksanabimaarya" class="text-white text-decoration-none">Bima Arya Wicaksana</a></p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/myscript.js"></script>
  <script>
    const cardIntro = document.querySelectorAll('.card-intro')
    const cardHobby = document.querySelectorAll('.card-hobby')
    const input = document.querySelectorAll('.input-form')
    const wpuCard = document.querySelectorAll('.card-wpu')
    const windahCard = document.querySelectorAll('.card-windah')
    cardIntro.forEach((e, i) => {
      e.dataset.aos = "fade-up"
      e.dataset.aosDelay = i * 200
      e.dataset.aosDuration = 1000
    });

    cardHobby.forEach((h, i) => {
      h.dataset.aos = "zoom-out";
      h.dataset.aosDelay = i * 200
      h.dataset.aosDuration = 700
    });

    input.forEach((input, i) => {
      input.dataset.aos = 'fade-right'
      input.dataset.aosDelay = i * 100
      input.dataset.aosDuration = 700
    });
    wpuCard.forEach( (wc,i) => {
        wc.dataset.aos = 'fade-up'
        wc.dataset.aosDelay = i * 200
        wc.dataset.aosDuration = 700
    });

    windahCard.forEach( (wd,i) => {
        wd.dataset.aos = 'fade-down'
        wd.dataset.aosDelay = i * 200
        wd.dataset.aosDuration = 700
    });
    AOS.init();
  </script>
</body>

</html>