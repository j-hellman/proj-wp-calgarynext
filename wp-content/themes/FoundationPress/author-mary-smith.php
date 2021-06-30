<?php
/*
Template Name: author-austin-rivers
*/

get_header(); ?>

<!-- The container for the entire content -->
<div class="topic-author-container">
  
  <!-- The Author name and profission -->
  <div class="topic-author-title">
    <h1>Mary Smith</h1>
    <p>Online Events Reporter</p>
  </div>

  <!-- Author's card -->
  <div class="author-card-container">
    <div class="card-image">
      <img class="author-photo" src="../../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\authors\mary-smith.jpg" alt="Mary Smith photo">
    </div>
    <div class="card-wrap">
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra justo euismod diam nunc, ut condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="card-contact-author">
        <p>Contact the author:</p>
        <ul class="sci link-hover">
					<li><a href="mailto:webmaster@example.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
					<li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
				</ul>
      </div>
    </div>
  </div>

  <!-- The author posts heading -->
  <div class="subtopic">
    <h2>Author's Posts</h2>
  </div>

  <!-- Card 1 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-events\calgary.jpg" alt="Calgary image">
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
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/events/experience-the-best-of-calgary/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-events\transparentPool.jpg" alt="Pool image">
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
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/events/transparent-pool-between-skyscrapers-opens-in-london/'">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card-container">
    <div class="card-image">
      <img src="../../../proj-wp-calgarynext\wp-content\themes\FoundationPress\src\assets\images\topic-events\borders.jpg" alt="Borders image">
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
        <button class="readMore-button" onclick="window.location.href='http:localhost/proj-wp-calgarynext/events/canada-prepares-to-reopen-the-borders/'">READ MORE</button>
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