<?php
    $section = explode('/', $_SERVER["PHP_SELF"]);
    $section = $section[count($section) - 1];
    $aboutUs = ($section == 'about.php') ? " class='selected'" : "";
    $menu = ($section == 'menu.php') ? " class='selected'" : "";
    $catering = ($section == 'catering.php') ? " class='selected'" : "";
    $contact = ($section == 'contact.php') ? " class='selected'" : "";
?>
<div class='menu'>
    <a href='about.php' <?php echo $aboutUs; ?>>About Us</a>
    <a href='menu.php' <?php echo $menu; ?>>Menu</a>
    <a href='catering.php' <?php echo $catering; ?>>Catering</a>
    <a href='contact.php' <?php echo $contact; ?>>Contact</a>
    <div>
        <a href='https://www.facebook.com/yycpronto/' target='_blank'>
            <img src='images/social/facebook.svg' alt='https://www.facebook.com/yycpronto/' title='Facebook' class='facebook_icon' />
        </a>
        <a href='https://www.instagram.com/prontopizzayyc/' target='_blank'>
            <img src='images/social/instagram.svg' alt='https://www.instagram.com/prontopizzayyc/' title='Instagram' class='instagram_icon' />
        </a>
    </div>
</div>