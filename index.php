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
      <!--<button class="sub-btn">Subscribe</button>-->
      <a class="sub-btn" href="logout.php">Logout</a>
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
          <h2 class="name">Loki</h2>
          <h6 class="des">The mercurial villain Loki resumes his role as the God of Mischief. Premiering on 9th June 2021 excl ...</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 2.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Mulan</h2>
          <h6 class="des">Masquerading as a male soldier to protect her father and tested every step of the way, Mulan must ha ...</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 3.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">The Falcon and the Winter Soldier</h2>
          <h6 class="des">Following the events of “Avengers: Endgame,” Sam Wilson and Bucky Barnes team up in a global adventu ...</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 4.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Avengers</h2>
          <h6 class="des">After the devastating events of the Infinity War, the Avengers assemble once more to reverse Thanos’ ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 5.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Thor Ragnarok</h2>
          <h6 class="des">Deprived of his mighty hammer Mjolnir, Thor must escape the other side of the universe to save his h ...</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 6.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Marvel's The Avengers</h2>
          <h6 class="des">When an unexpected enemy emerges that threatens the fate on mankind, Nick Fury, Director of S.H.I.E. ...</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 7.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Pirates of the Caribbean: At World's End</h2>
          <h6 class="des">Captain Barbossa and others must sail off the edge of the map, navigate treachery and betrayal, find ...</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 8.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Soul</h2>
          <h6 class="des">After a small misstep, Joe is transported to The Great Before and must find his way back with the he ...</h6>
          <button class="watchlist-btn">Add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 9.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Raya and the last Dragon</h2>
          <h6 class="des">Raya, a fallen princess, must track down the legendary last dragon to stop the evil forces that have ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 10.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Luca</h2>
          <h6 class="des">The movie is a coming-of-age story about one young boy experiencing an unforgettable summer filled w ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 11.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Ford vs Ferrari</h2>
          <h6 class="des">Caroll Shelby and Ken Miles battle against all the odds to build a revolutionary race car for Ford M ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 12.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Dark Phoenix</h2>
          <h6 class="des">After a rescue mission in space, Jean Grey behaves unstably. The X-Men must find a way to save her s ...</h6>
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
          <h2 class="name">Luca</h2>
          <h6 class="des">The movie is a coming-of-age story about one young boy experiencing an unforgettable summer filled w ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>

      <div class="card">
        <img src="images/poster 11.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Ford v Ferrari</h2>
          <h6 class="des">Caroll Shelby and Ken Miles battle against all the odds to build a revolutionary race car for Ford M ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 12.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Dark Phoenix</h2>
          <h6 class="des">After a rescue mission in space, Jean Grey behaves unstably. The X-Men must find a way to save her s ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 9.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Raya and the last Dragon</h2>
          <h6 class="des">Raya, a fallen princess, must track down the legendary last dragon to stop the evil forces that have ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 8.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Soul</h2>
          <h6 class="des">After a small misstep, Joe is transported to The Great Before and must find his way back with the he ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 7.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Pirates of the Caribbean: At World's End</h2>
          <h6 class="des">Captain Barbossa and others must sail off the edge of the map, navigate treachery and betrayal, find ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 6.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Marvels The Avengers</h2>
          <h6 class="des">When an unexpected enemy emerges that threatens the fate on mankind, Nick Fury, Director of S.H.I.E. ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 5.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Thor Ragnarok</h2>
          <h6 class="des">Deprived of his mighty hammer Mjolnir, Thor must escape the other side of the universe to save his h ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 4.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Avengers</h2>
          <h6 class="des">After the devastating events of the Infinity War, the Avengers assemble once more to reverse Thanos’ ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 3.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">The Falcon and the Winter Soldier</h2>
          <h6 class="des">Following the events of “Avengers: Endgame,” Sam Wilson and Bucky Barnes team up in a global adventu ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 2.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Mulan</h2>
          <h6 class="des">Masquerading as a male soldier to protect her father and tested every step of the way, Mulan must ha ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>
      <div class="card">
        <img src="images/poster 1.png" class="card-img" alt="">
        <div class="card-body">
          <h2 class="name">Loki</h2>
          <h6 class="des">The mercurial villain Loki resumes his role as the God of Mischief. Premiering on 9th June 2021 excl ...</h6>
          <button class="watchlist-btn">add to watchlist</button>
        </div>
      </div>



    </div>
  </div>

  <script src="index.js" async></script>
</body>

</html>