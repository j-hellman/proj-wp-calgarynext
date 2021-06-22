<?php
/*
Template Name: Entertainment Page
*/

get_header(); ?>

<body id="entertainmentMenu">

<div class="topic-title">
  <h1>Sports & Entertainment</h1>
</div>

<div class="topic-container">

  <!-- Style the Top Story section -->
  <div class="subtopic">
    <h2>TOP STORY</h2>
  </div>
  <div class="topstory-heading topstory-entertainment link-hover"> <!-- topstory-entertainment set the background image -->
    <h3><a href="http://localhost/calgary_next/sports-entertainment/lebron-back-to-miami-again/">LeBron Back to Miami, AGAIN!</a></h3>
    <p>May 6, 2021</p>
  </div>
  <hr>
  <div class="subtopic">
    <h2>LATEST</h2>
  </div>

  <!-- Card 1 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\stampede.jpg" alt="Stampede image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Stampede Set to Resume 2021</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/sports-entertainment/stampede-set-to-resume-2021/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\hockeyWoman.jpg" alt="Hockey woman image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Women's World Hockey Championship in Calgary</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/sports-entertainment/womens-world-hockey-championship-in-calgary/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\music.jpg" alt="Music Convention image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Music Cities Convention Coming to Calgary next semester</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/sports-entertainment/music-cities-convention-coming-to-calgary-next-semester/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\outside.jpg" alt="Safe Outside image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>How To Stay Safe Outside During COVID-19 Pandamic</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/sports-entertainment/how-to-stay-safe-outside-during-covid-19-pandamic/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\calgary.jpg" alt="Calgary image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Enjoy the May Long Weekend doing different things in Calgary</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/sports-entertainment/enjoy-the-may-long-weekend-doing-different-things-in-calgary/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- "Load More" button -->
  <div class="button-container">
    <div class="button-wrap">
      <button class="loadMore-button">LOAD MORE</button>
    </div>
  </div>
</div>



<?php get_footer();