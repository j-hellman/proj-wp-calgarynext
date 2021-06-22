<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<body id="homeMenu">

<h1 class="home-header-title">
  TRENDING
</h1>

<!-- TRENDING SLIDER -->
<?php echo do_shortcode('[smartslider3 slider="6"]'); ?>

<!-- Container holding TOP STORIES and WEATHER -->
<div class="home-grid-container">

  <div class="top-stories">
    <h2>TOP STORIES</h2>
    <div class="story-container">

    <!-- Story ONE container -->
      <div class="story-1">
        <h2>
          <a href="http://localhost:3000/calgary_next/business/the-rise-of-gamestop/" class="story-name">The Rise of GameStop</a>
        </h2>
        <span class="story-date">June 1, 2021</span>
      </div>

    <!-- Story TWO container -->
      <div class="story-2">
        <h2>
          <a href="http://localhost/calgary_next/restaurants-food/global-shortage-of-coca-cola/" class="story-name">Global Shortage of Coca-Cola</a>
        </h2>
        <span class="story-date">June 1, 2021</span>
      </div>

    <!-- Story THREE container -->
      <div class="story-3">
        <h2>
          <a href="http://localhost/calgary_next/events/offices-will-remain-closed/" class="story-name">Offices Will Remain Closed</a>
        </h2>
        <span class="story-date">June 1, 2021</span>
      </div>

    <!-- Story FOUR container -->
      <div class="story-4">
        <h2>
          <a href="http://localhost/calgary_next/events/spacex-launces-starship-sn15/" class="story-name">SpaceX Launches Starship SN15</a>
        </h2>
        <span class="story-date">June 1, 2021</span>
      </div>

    </div>
  </div>

  <div class="weather">
    <h2>CALGARY WEATHER</h2>

    <!-- This is the WEATHER WIDGET -->
    <?php dynamic_sidebar('smartslider_area_1'); ?>
  </div>
 
</div>


<!-- COVID SLIDER -->
<?php echo do_shortcode('[smartslider3 slider="8"]'); ?>

<div class="category-large-wrapper">

  <!-- CATEGORY BUSINESS CARD -->
  <div class="category-grid-container">

  <!-- GREY BOX CONTAINER-->
    <div class="category-grey-box">
      <!-- Category link -->
      <h2>
        <a href="http://localhost:3000/calgary_next/category-business/" class="category-title">BUSINESS</a>
      </h2>
      <div class="category-img-1">
        <!-- Article Title link -->
        <h2>
          <a href="http://localhost:3000/calgary_next/business/the-impending-market-crash/" class="category-name">The Impending Market Crash</a>
        </h2>
        <span class="category-date">June 3, 2021</span>
      </div>
      <p class="category-summary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, provident velit eum nobis iure dolore magni dolorem accusantium expedita aliquid nam omnis quasi. Cumque quos totam ea culpa. Ad delectus voluptate sequi sed harum consequuntur, impedit asperiores quod perspiciatis earum sit exercitationem autem blanditiis ratione!</p>
      <div class="flex-author"> 
          <a href="http://localhost:3000/calgary_next/author/austin-river/" class="category-author">Austin Rivers</a>
      </div>  
    </div>

  </div>


  <!-- CATEGORY EVENTS CARD -->
  <div class="category-grid-container">

  <!-- GREY BOX CONTAINER-->
    <div class="category-grey-box">
      <!-- Category link -->
      <h2>
        <a href="http://localhost:3000/calgary_next/category-events/" class="category-title">EVENTS</a>
      </h2>
      <div class="category-img-2">
        <!-- Article Title link -->
        <h2>
          <a href="http://localhost:3000/calgary_next/events/music-festival-remain-closed/" class="category-name">Music Festivals Remain Closed</a>
        </h2>
        <span class="category-date">June 3, 2021</span>
      </div>
      <p class="category-summary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, provident velit eum nobis iure dolore magni dolorem accusantium expedita aliquid nam omnis quasi. Cumque quos totam ea culpa. Ad delectus voluptate sequi sed harum consequuntur, impedit asperiores quod perspiciatis earum sit exercitationem autem blanditiis ratione!</p>
      <div class="flex-author"> 
          <a href="http://localhost:3000/calgary_next/author/mary-smith/" class="category-author">Mary Smith</a>
      </div>  
    </div>

  </div>


  <!-- CATEGORY RESTAURANTS & FOOD CARD -->
  <div class="category-grid-container">

  <!-- GREY BOX CONTAINER-->
    <div class="category-grey-box">
      <!-- Category link -->
      <h2>
        <a href="http://localhost:3000/calgary_next/category-restaurants/" class="category-title">RESTAURANTS & FOOD</a>
      </h2>
      <div class="category-img-3">
        <!-- Article Title link -->
        <h2>
          <a href="http://localhost:3000/calgary_next/restaurants-food/calgarys-choice-hys-steakhouse/" class="category-name">Calgary's Choice: Hy's Steakhouse</a>
        </h2>
        <span class="category-date">June 3, 2021</span>
      </div>
      <p class="category-summary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, provident velit eum nobis iure dolore magni dolorem accusantium expedita aliquid nam omnis quasi. Cumque quos totam ea culpa. Ad delectus voluptate sequi sed harum consequuntur, impedit asperiores quod perspiciatis earum sit exercitationem autem blanditiis ratione!</p>
      <div class="flex-author"> 
          <a href="http://localhost:3000/calgary_next/author/beth-jones/" class="category-author">Beth Jones</a>
      </div>  
    </div>

  </div>


  <!-- CATEGORY SPORTS & ENTERTAINMENT CARD -->
  <div class="category-grid-container">

  <!-- GREY BOX CONTAINER-->
    <div class="category-grey-box">
      <!-- Category link -->
      <h2>
        <a href="http://localhost:3000/calgary_next/category-entertainment/" class="category-title">SPORTS & ENTERTAINMENT</a>
      </h2>
      <div class="category-img-4">
        <!-- Article Title link -->
        <h2>
          <a href="http://localhost:3000/calgary_next/sports-entertainment/lebron-back-to-miami-again/" class="category-name">LeBron Back to Miami, AGAIN!</a>
        </h2>
        <span class="category-date">June 3, 2021</span>
      </div>
      <p class="category-summary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, provident velit eum nobis iure dolore magni dolorem accusantium expedita aliquid nam omnis quasi. Cumque quos totam ea culpa. Ad delectus voluptate sequi sed harum consequuntur, impedit asperiores quod perspiciatis earum sit exercitationem autem blanditiis ratione!</p>
      <div class="flex-author"> 
          <a href="http://localhost:3000/calgary_next/author/william-taylor/" class="category-author">William Taylor</a>
      </div>  
    </div>

  </div>
</div>
<?php get_footer(); ?>
