<!DOCTYPE html>
<html>
<head>
  <title>PROFILE</title>
  <link href="{{ asset('css/indexstyle.css') }}" rel="stylesheet">
</head>
<body>
  <div class="logo">
    <img  class="profile-img"  src="image/logopplg.png" alt="Logo">
  </div>
  <div class="navigation">
    <ul>
      <li><a href="#">Guitars</a></li>
      <li><a href="#">Basses</a></li>
      <li><a href="cv">Amp</a></li>
      <li><a href="siswa">Plug In</a></li>
    </ul>
  </div>
  <div class="wrapper">
  <div class="header">
    <h1 class="welcome-text">JIDANEZ</h1>
  </div>
  <div class="banner">
    <h1>WELCOME</h1>
  </div>
  </div>
    <div class="splitview skewed">
      <div class="panel bottom">
          <div class="content">
              <div class="description">
                  <h1>GUITARS</h1>  
              </div>

              <img src="image/gitarpink.png" alt="Original">
          </div>
      </div>

      <div class="panel top">
          <div class="content">
              <div class="description-kiri">
                  <h1>BASS</h1>
              </div>
              <img src="image/basssilver.png" alt="Duotone">
          </div>
      </div>

      <div class="handle"></div>
  </div>

  <div class="splitview skewed 2">
    <div class="panel2 bottom">
        <div class="content">
            <div class="description">
                <h1>AMPS</h1>  
            </div>

            <img src="image/ampjudul.png" alt="Original">
        </div>
    </div>

    <div class="panel2 top">
        <div class="content">
            <div class="description-kiri">
                <h1>PLUG IN</h1>
            </div>
            <img src="image/VSTjudul.png" alt="Duotone">
        </div>
    </div>

    <div class="handle"></div>
  </div>
  
  
  <div class="text-area">

  <div class="boxes">
    <div class="box">
      <h2>ASATO Plug In</h2>
      <img src="image/VSTasato.png" alt="">
    </div>
    <div class="box">
      <h2>BODEN 7 STRING</h2>
      <img src="image/boden1.avif " alt="">
    </div>
    <div class="box">
      <h2>VOX AC30</h2>
      <img src="image/voxamp.png" alt="">
    </div>
  </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; JIDANEX</p>
  </footer>
  
  <script src="{{asset('js/animasi.js')}}"></script>
  <script src="{{asset('js/animasi2.js')}}"></script>
</body>
</html>
