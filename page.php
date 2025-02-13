<?php 

get_header();

while(have_posts()){
    the_post();
    ?>
    <div class="bread-cramb">
    <div class="container">
        <h1><?=the_title()?></h1>
    </div>
</div>
<div class="store-content">
    <div class="container">

   
    <?php
    the_content();

    ?>
     </div>
     </div>
<?php
}
get_footer();