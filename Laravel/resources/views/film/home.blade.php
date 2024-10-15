<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link
      rel="icon"
      type="image"
      href="data:image/jpeg;base64,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"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/film.css') }}">
  </head>

  <body>
    <nav>
      <div class="navbar">
        <div class="exit">
          <a href="#"><i data-feather="log-out"></i></a>
        </div>
        <div class="search-form">
          <input type="search" id="search-box" placeholder="Search here..." />
          <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <div class="navbar-inner">
          <a href="#"><i data-feather="user"></i></a>
        </div>
      </div>
    </nav>
    \

    <h1>Home</h1>
    <h2>Anime</h2>
    <div class="scroll">
      <div class="container">
        <div class="menu-item">
            @foreach ($films as $film)
          <h3>One Piece</h3>
          <img
            src="{{ asset('/storage/films/'.$film->image) }}"
          />
          <a href="https://otakudesu.cloud/anime/1piece-sub-indo/">Watch</a>
        </div>
        <div class="menu-item">
          <h3>Kaguya</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2019/01/Kaguya-sama-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=kaguya&post_type=anime">Watch</a>
        </div>
        <div class="menu-item">
          <h3>Kuroko no Basket</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2019/05/Kuroko-no-Basket-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=kuroko+no&post_type=anime"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Spy X Family</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2024/02/Spy-x-Family-Season-2-Sub-Indo-212x300.jpg"
          />
          <a href="https://otakudesu.cloud/?s=spy+x+family&post_type=anime"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Suki na Ko ga Megane Wo Wasureta</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2023/10/Suki-na-Ko-ga-Megane-wo-Wasureta-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/anime/sukireta-sub-indo/">Watch</a>
        </div>
        <div class="menu-item">
          <h3>Shinigami Bocchan to Kuro Maid</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2021/07/Shinigami-Bocchan-to-Kuro-Maid-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=Shinigami+bocchan&post_type=anime"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Bungou Stray Dogs</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2018/12/Bungou-Stray-Dogs-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=bungou+stray+dogs&post_type=anime"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Yamada-Kun to Lv999 no Koi wo Suru</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2023/04/Yamada-kun-to-Lv999-no-Koi-wo-Suru-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/anime/yamada-lv999-sub-indo/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Tokidoki: Bosotto Russia go de Dereru Tonari no Alya san</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2024/07/Tokidoki-Bosotto-Russia-go-de-Dereru-Tonari-no-Alya-san.jpg"
          />
          <a
            href="https://otakudesu.cloud/anime/tokidoki-bosotto-russia-alya-san-sub-indo/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Maou Gakuin no Futekigousha</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2020/07/Maou-Gakuin-no-Futekigousha-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=maou+gakuin&post_type=anime"
            >Watch</a
          >
        </div>
      </div>
    </div>

    
    <h2>Movie</h2>
    <div class="scroll">
      <div class="container">
        <div class="menu-item">
          <h3>La la Land</h3>
          <img
            src="https://image.tmdb.org/t/p/w185/uDO8zWDhfWwoFdKS4fzkUJt0Rf0.jpg"
          />
          <a href="https://vip.idlixofficialx.net/movie/la-la-land-2016/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>A Man Called Otto</h3>
          <img
            src="https://image.tmdb.org/t/p/w185/130H1gap9lFfiTF9iDrqNIkFvC9.jpg"
          />
          <a href="https://vip.idlixofficialx.net/movie/a-man-called-otto-2022/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>You Are the Apple of My Eye</h3>
          <img
            src="https://image.tmdb.org/t/p/w185/bXgLbpEb6uDVdqpTQouOd0VmH7E.jpg"
          />
          <a
            href="https://vip.idlixofficialx.net/movie/you-are-the-apple-of-my-eye-2011/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Blue Lock</h3>
          <img
            src="https://image.tmdb.org/t/p/w185/ae434jM5NG2kKX1rRkG5giMhpPI.jpg"
          />
          <a href="https://vip.idlixofficialx.net/movie/blue-lock-the-movie-episode-nagi-2024/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Shinigami Bocchan to Kuro Maid</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2021/07/Shinigami-Bocchan-to-Kuro-Maid-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=Shinigami+bocchan&post_type=anime"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Bungou Stray Dogs</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2018/12/Bungou-Stray-Dogs-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=bungou+stray+dogs&post_type=anime"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Yamada-Kun to Lv999 no Koi wo Suru</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2023/04/Yamada-kun-to-Lv999-no-Koi-wo-Suru-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/anime/yamada-lv999-sub-indo/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Tokidoki: Bosotto Russia go de Dereru Tonari no Alya san</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2024/07/Tokidoki-Bosotto-Russia-go-de-Dereru-Tonari-no-Alya-san.jpg"
          />
          <a
            href="https://otakudesu.cloud/anime/tokidoki-bosotto-russia-alya-san-sub-indo/"
            >Watch</a
          >
        </div>
        <div class="menu-item">
          <h3>Maou Gakuin no Futekigousha</h3>
          <img
            src="https://otakudesu.cloud/wp-content/uploads/2020/07/Maou-Gakuin-no-Futekigousha-Sub-Indo.jpg"
          />
          <a href="https://otakudesu.cloud/?s=maou+gakuin&post_type=anime"
            >Watch</a
          >
        </div>
      </div>
    </div>
    <button onclick="myFunction()">Toggle dark mode</button>
    <script>
      feather.replace();
      function myFunction() {
        var element = document.body;
        element.classList.toggle("white-mode");
      }
    </script>
  </body>
</html>