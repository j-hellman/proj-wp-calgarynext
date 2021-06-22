<?php
/*
Template Name: Business Page
*/

get_header(); ?>

<body id="businessMenu">

<div class="topic-title">
  <h1>BUSINESS</h1>
</div>

<div class="topic-container">

  <!-- Style the Top Story section -->
  <div class="subtopic">
    <h2>TOP STORY</h2>
  </div>
  <div class="topstory-heading topstory-business link-hover"> <!-- topstory-business set the background image -->
    <h3><a href="http://localhost/calgary_next/business/the-impending-market-crash/">The Impending Market Crash</a></h3>
    <p>May 6, 2021</p>
  </div>
  <hr>
  <div class="subtopic">
    <h2>LATEST</h2>
  </div>

  <!-- Card 1 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-business\bitcoin.jpg" alt="Bitcoin image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Best Time To Buy Crypto</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/business/best-time-to-buy-crypto/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-business\laptop.jpg" alt="Laptop image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Alberta Now Home to 3,000 Tech Companies</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/business/alberta-now-home-to-3000-tech-companies/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-business\house.jpg" alt="House image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Calgary Housing Market Sees Best Sales in Over Two Decades</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/business/calgary-housing-market-sees-best-sales-in-over-two-decades/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-business\openshop.jpg" alt="Openshop image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Small Businesses Urge Calgarians to Shop More</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/business/small-businesses-urge-calgarians-to-shop-more/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-business\amazon.jpg" alt="Amazon image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Amazon Postpones Prime Day</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/calgary_next/business/amazon-postpones-prime-day/'">READ MORE</button>
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