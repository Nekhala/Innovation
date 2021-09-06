
     <?php get_header(); ?>

<div class="main">      
 <div class="container">

 <img src="<?php the_field("cloud_logo") ?>" alt="cloud">
       <!-- May need to remove the line underneath" -->
       <img src= "<?php echo get_template_directory_uri() ?>/images/cloud.svg" height="128" width="196"/>

     <?php while(have_posts()) : the_post() ?>
       
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
       


       <!--<h2>The Innovation Cloud Conference</h2>
       <p>Connect with the best minds across a wide range of industries to share ideas and brainstorm new solutions to challenging problems.</p>
       <p>Hear industry leaders talk about what worked (and what didn't) so that you can save time on your most challenging projects.</p>
       <p>Learn about the latest research and technologies that you can use immediately to invent the future.</p>
       -->
     <?php endwhile; ?>

 </div>
</div>
<div class="jumbotron">
 <div class="container"> 
 
 <h1>
     Stay Connected 
   </h1>
   <p>
     Receive weekly insights from industry insiders.
   </p>
   <a class="btn" href="">Join</a>
 </div>
</div>


<?php get_footer(); ?>
