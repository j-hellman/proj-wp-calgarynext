<?php
/*
Template Name: Events Page
*/

get_header(); ?>

<body id="eventsMenu">
  
<div class="topic-title">
  <h1>EVENTS</h1>
</div>

<div class="topic-container">

  <!-- Style the Top Story section -->
  <div class="subtopic">
    <h2>TOP STORY</h2>
  </div>
  <div class="topstory-heading topstory-events link-hover"> <!-- topstory-events set the background image -->
    <h3><a href="http://localhost/calgary_next/events/music-festival-remain-closed/">Music Festival Remain Closed</a></h3>
    <p>May 6, 2021</p>
  </div>
  <hr>
  <div class="subtopic">
    <h2>LATEST</h2>
  </div>

  <!-- Card 1 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-events\calgary.jpg" alt="Calgary image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Experience the Best of Calgary</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/events/experience-the-best-of-calgary/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-events\transparentPool.jpg" alt="Pool image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Transparent pool between skyscrapers opens in London</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/events/transparent-pool-between-skyscrapers-opens-in-london/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-events\borders.jpg" alt="Borders image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Canada Prepares to Reopen the Borders</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/events/canada-prepares-to-reopen-the-borders/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-events\fathersDay.jpg" alt="Father's Day image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Father's Day Curbside Gifts</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/events/fathers-day-curbside-gifts/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-events\happiness.jpg" alt="Workshop image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Health and Happiness Workshop</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/events/health-and-happiness-workshop/'">READ MORE</button>
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