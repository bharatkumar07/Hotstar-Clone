<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disney+ Hotstar Clone</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar">
    <img src="images/logo.png" class="brand-logo" alt="">
    <ul class="nav-links">
      <li class="nav-item"><a href="#">TV</a></li>
      <li class="nav-item"><a href="#">Movies</a></li>
      <li class="nav-item"><a href="#">Sports</a></li>
      <li class="nav-item"><a href="#">Premium</a></li>
    </ul>
    <div class="right-container"><input type="text" class="search-box" placeholder="search" />
      <button class="sub-btn">Subscribe</button>
      <a href="logout.php">Logout</a>
    </div>
  </nav>
  <div class="carousel-container">
    <div class="carousel">
      <!-- <div class="slider">

        <div class="slide-content">
          <h1 class="movie-title">Loki</h1>
          <p class="movie-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora asperiores, dolore
            deleniti eos delectus, sint praesentium, labore itaque illum perspiciatis voluptatem molestiae dolor
            mollitia debitis quibusdam magnam facilis. Consectetur, eius.</p>

        </div>
        <img src="images/slider 1.png" class="" alt="">
     </div> -->
    </div>
  </div>
  <div class="video-card-container">
    <div class="video-card">
      <img src="images/disney.PNG" class="video-card-image" alt="">
      <video src="videos/disney.mp4" muted loop class="card-video"></video>
    </div>
    <div class="video-card">
      <img src="images/pixar.PNG" class="video-card-image" alt="">
      <video src="videos/pixar.mp4" muted loop class="card-video"></video>
    </div>
    <div class="video-card">
      <img src="images/marvel.png" class="video-card-image" alt="">
      <video src="videos/marvel.mp4" muted loop class="card-video"></video>
    </div>
    <div class="video-card">
      <img src="images/star-wars.PNG" class="video-card-image" alt="">
      <video src="videos/star-war.mp4" muted loop class="card-video"></video>
    </div>
    <div class="video-card">
      <img src="images/geographic.PNG" class="video-card-image" alt="">
      <video src="videos/geographic.mp4" muted loop class="card-video"></video>
    </div>
  </div>

  <h1 class="title">Recommended For You</h1>
  <div class="movies.list">
    <div class="list1">
    <button class="pre-btn" title="btn"><img src="images/pre.png" alt=""> </button>
    <button class="nxt-btn" title="btn"><img src="images/nxt.png" alt=""> </button>
    <div class="card-container">

      <div class="card">
        <img src="images/poster 1.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 2.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 3.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 4.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 5.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 6.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 7.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 8.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 9.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 10.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 11.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 12.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>





    </div>
  </div></div>
  <h1 class="title">Popular Shows</h1>
  <div class="movies.list">
    <button class="pre-btn p2" title="btn"><img src="images/pre.png" alt=""> </button>
    <button class="nxt-btn n2" title="btn"><img src="images/nxt.png" alt=""> </button>
    <div class="card-container">

      <div class="card">
        <img src="images/poster 10.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 11.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 12.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 9.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 8.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 7.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 6.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 5.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 4.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 3.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 2.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 1.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Movie name</h2>
          <h6 class="des">lorem ishd hwbhj wbsj</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>



    </div>
  </div>

  <script src="index.js" async></script>
</body>

</html>