<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivan Molina Theme</title>

    <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous"> -->
    <?php wp_head();?>

</head>

<body>

<header>

<div class="custom-logo">
    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }

    ?>
</div>
<div class="menu-toggle main-nav">
    <?php wp_nav_menu(
  array(
    'theme_location' => 'primary',
    'container' => 'ul',
    'menu-id' => 'primary-menu',
    'deep' => 3,
  )); ?>
  <?php
 
 ?>
    
</div>
<div class="contact">
<button class="talk">
    <span class="initialText">Talk to us</span>
    <span class="hoverText">CTA button</span>
</button>
<button class="kb">
    <!-- <span class="initialText">KB</span>
    <span class="hoverText">CTA button</span> -->
    <span class="initialText">
        <?php echo '<a href="kb">KB</a>' ;?>
    </span>
    <span class="hoverText">
        <?php echo '<a href="kb">CTA button</a>' ;?>
    </span>
</button>


</div>
</header>
    
