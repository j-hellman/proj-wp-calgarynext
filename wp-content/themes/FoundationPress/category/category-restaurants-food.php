<?php
/*
Template Name: Restaurants-food Page
*/

get_header(); ?>

<body id="restaurantsMenu">

<div class="topic-title">
  <h1>RESTAURANTS & FOOD</h1>
</div>

<div class="topic-container">

  <!-- Style the Top Story section -->
  <div class="subtopic">
    <h2>TOP STORY</h2>
  </div>
  <div class="topstory-heading topstory-restaurants link-hover"> <!-- topstory-restaurants set the background image -->
    <h3><a href="http://localhost/proj-wp-calgarynext/restaurants-food/calgarys-choice-hys-steakhouse/">Calgary's Choice: Hy's Steakhouse</a></h3>
    <p>May 6, 2021</p>
  </div>
  <hr>
  <div class="subtopic">
    <h2>LATEST</h2>
  </div>

  <!-- Card 1 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-restaurants\cooking.jpg" alt="Cooking image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>How to Fall Back in Love With Cooking During the Pandemic</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/restaurants-food/how-to-fall-back-in-love-with-cooking-during-the-pandemic/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-restaurants\tacos.jpg" alt="Tacos image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Favorite Tacos in Calgary</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/restaurants-food/favorite-tacos-in-calgary/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-restaurants\restaurant.jpg" alt="Restaurant image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Restaurants opened in the city</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/restaurants-food/restaurants-opened-in-the-city/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-restaurants\unhealthyFood.jpg" alt="Unhealthy food image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Unhealthy Eating Behaviours During the Pandemic </h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/restaurants-food/unhealthy-eating-behaviours-during-the-pandemic/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-restaurants\restaurantCalgary.jpg" alt="Calgary Restaurant image">
    </div>
    <div class="card-wrap">
      <div class="card-title">
        <h3>Calgary's Best Restaurants</h3>
      </div>
      <div class="card-date">
        <p>May 06, 2021</p>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div>
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/restaurants-food/calgarys-best-restaurants/'">READ MORE</button>
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