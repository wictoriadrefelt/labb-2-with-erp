<?php 


get_header();


if(have_posts()){
    while(have_posts()){
        the_post();
        ?> <h1> <?php the_title(); ?> </h1> 

          <ul class="meta">
          <li>
              <i class="fa fa-calendar"></i> <?php 
              // retreives the date that post was created
              echo get_the_date('j F, Y'); ?>
          </li>
          <li>
              <i class="fa fa-user"></i> <?php 
              // creates a link to author of created post  
              the_author_posts_link(); ?>
          </li> 
          <li>
              <i class="fa fa-tag"></i> 
             <?php the_tags(''); ?>
          </li>
      </ul> 
      <?php
        the_content();
        ?> 
        <hr id='line'> 
        <?php
   


}

};


get_footer();

?>