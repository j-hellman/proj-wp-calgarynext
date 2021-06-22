<?php
/*
Template Name: author-austin-rivers
*/

get_header(); ?>

<!-- The container for the entire content -->
<div class="topic-author-container">
  
  <!-- The Author name and profission -->
  <div class="topic-author-title">
    <h1>William Taylor</h1>
    <p>Online Sports & Entertainment Reporter</p>
  </div>

  <!-- Author's card -->
  <div class="author-card-container">
    <div class="card-image">
      <img class="author-photo" src="../../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\authors\william-taylor.jpg" alt="William Taylor photo">
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
      <img src="../../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\stampede.jpg" alt="Stampede image">
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
      <img src="../../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\hockeyWoman.jpg" alt="Hockey woman image">
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
      <img src="../../../calgary_next\wp-content\themes\FoundationPress\src\assets\images\topic-entertainment\music.jpg" alt="Music Convention image">
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


  <!-- "Load More" button -->
  <div class="button-container">
    <div class="button-wrap">
      <button class="loadMore-button">LOAD MORE</button>
    </div>
  </div>
</div>

<?php get_footer();