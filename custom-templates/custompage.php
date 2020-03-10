<?php
 /**
  * Template Name:custompage
  */ 

//get the header
 get_header();
 ?>

 
  <!DOCTYPE html>
  <head>

  </head>
  <body >
      <!-- Carousel -->
<div id="productHighlight" class="carousel slide card-box-shadow " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#productHighlight" data-slide-to="0" class="active"></li>
        <li data-target="#productHighlight" data-slide-to="1"></li>
        <li data-target="#productHighlight" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo
get_template_directory_uri() . '/assets/images/neb1.jpg' ?>" alt="First slide"  style="width:100%; margin-right:20%;">
  <div class="carousel-caption">
        <p>Around the world, too many children still start life at a </p>
          <p>disadvantage simply because of who they are and where </p>
          <p>they are from.</p>

          <p>Boundless Foundation has a bold ambition: we believe in a world </p>
          <p>in which all children survive, have the chance to learn, and </p>
          <p>are protected from abuse, neglect and exploitation.</p>
          <h3>"Not only must we be good,but we must also be good for something"</h3>
          <p>Henry Davei Thoreau</p>
        </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo
get_template_directory_uri() . '/assets/images/come7.jpg' ?>" alt="Second slide">
          <div class="carousel-caption">
          <p>Around the world, too many children still start life at a </p>
          <p>disadvantage simply because of who they are and where </p>
          <p>they are from.</p>

          <p>Boundless Foundation has a bold ambition: we believe in a world </p>
          <p>in which all children survive, have the chance to learn, and </p>
          <p>are protected from abuse, neglect and exploitation.</p>
          <h3>"Not only must we be good,but we must also be good for something"</h3>
          <p>Henry Davei Thoreau</p>
        </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo
get_template_directory_uri() . '/assets/images/neb2.jpg' ?>" alt="Third slide">
           <div class="carousel-caption">
           <p>Around the world, too many children still start life at a </p>
           <p>disadvantage simply because of who they are and where </p>
           <p>they are from.</p>

            <p>Boundless Foundation has a bold ambition: we believe in a world </p>
            <p>in which all children survive, have the chance to learn, and </p>
            <p>are protected from abuse, neglect and exploitation.</p>
           <h3>"Not only must we be good,but we must also be good for something"</h3>
          <p>Henry Davei Thoreau</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#productHighlight" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#productHighlight" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel -->

<h1 style="font-size:30px;">----OUR CAUSE----<h1>
<p>Around the world, too many children still start life at a </p>
<p>disadvantage simply because of who they are and where </p>
<p>they are from.</p>

<p>Boundless Foundation has a bold ambition: we believe in a world </p>
<p>in which all children survive, have the chance to learn, and </p>
<p>are protected from abuse, neglect and exploitation.</p>

       
<div class="main-custom" style="display: flex; align-items: center;">
  <div class="column" style="flex: 33.33%; padding: 5px;">
  <a href="http://localhost/foundation/index.php/gallery/"><img src="<?php echo
       get_template_directory_uri() . '/assets/images/home2.jpg' ?>" alt="Forest" style="width:100%"></a>
       <p style="color: orange; margin-left: 5%;">
        Arriving at Ngora Primary School for the Deaf.
       </p>
       <p style="color: orange; margin-left: 5%;">KUMI DISTRICT</p>
       <p style="color: orange; margin-left: 5%;">APRIL 13,2019</p>

  </div>
  <div class="column" style="flex: 33.33%; padding: 5px;">
       <a href="http://localhost/foundation/index.php/gallery/""><img src="<?php echo
       get_template_directory_uri() . '/assets/images/home2.jpg' ?>" alt="Forest" style="width:100%"></a>
       <p style="color: orange; margin-left: 5%;">
        Arriving at Ngora Primary School for the Deaf.
       </p>
       <p style="color: orange; margin-left: 5%;">KUMI DISTRICT</p>
       <p style="color: orange; margin-left: 5%;">APRIL 13,2019</p>
  </div>
  <div class="column" style="flex: 33.33%; padding: 5px;">
  <a href="http://localhost/foundation/index.php/gallery/""><img src="<?php echo
       get_template_directory_uri() . '/assets/images/home2.jpg' ?>" alt="Forest" style="width:100%"></a>
        <p style="color: orange; margin-left: 5%;">
        Arriving at Ngora Primary School for the Deaf.
       </p>
       <p style="color: orange; margin-left: 5%;">KUMI DISTRICT</p>
       <p style="color: orange; margin-left: 5%;">APRIL 13,2019</p>
  </div>
</div>

  </body>

  
  </html>


  <?php
 //get the footer
 get_footer();
  ?>