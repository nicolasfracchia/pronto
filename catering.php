<?php include_once "products-catering.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Pronto - Pizza & Pasta</title>
    <link rel="stylesheet" href="styles/interns.css" />
    <link rel="stylesheet" href="styles/catering.css" />
</head>
<body>
    <?php include_once('header.php'); ?>
    <nav class='submenu' id='filters_submenu'>
        <ul>
            <li>Categories:</li>
            <li>
                <input type='checkbox' data-type='category' data-filter='Pizza' checked id='filter-pizza' />
                <label for='filter-pizza'>Pizza</label>
            </li>
            <li>
                <input type='checkbox' data-type='category' data-filter='Pasta' checked id='filter-pasta' />
                <label for='filter-pasta'>Pasta</label>
            </li>
            <li>
                <input type='checkbox' data-type='category' data-filter='Pagnota' checked id='filter-pagnota' />
                <label for='filter-pagnota'>Pagnota</label>
            </li>
            <li>
                <input type='checkbox' data-type='category' data-filter='Salad' checked id='filter-salad' />
                <label for='filter-salad'>Salad</label>
            </li>
            <li>
                <input type='checkbox' data-type='category' data-filter='Wraps' checked id='filter-wraps' />
                <label for='filter-wraps'>Wraps</label>
            </li>
        </ul>
        <ul>
            <li>Filters:</li>
            <li>
                <input type='checkbox' data-type='filter' data-filter='Meat' checked id='filter-meat' />
                <label for='filter-meat'>Meat</label>
            </li>
            <li>
                <input type='checkbox' data-type='filter' data-filter='Halal' checked id='filter-halal' />
                <label for='filter-halal'>Halal</label>
            </li>
            <li>
                <input type='checkbox' data-type='filter' data-filter='Vegetarian' checked id='filter-vegetarian' />
                <label for='filter-vegetarian'>Vegetarian</label>
            </li>
        </ul>
    </nav>
    <main class='section_catering' id='section_catering'>
        <h1>Catering Menu</h1>
        <div id='show_filters'></div>
        <?php
            foreach($products as $p){
                echo "<post class='product' data-category='".$p['category']."' data-tags='".implode(' ', $p['tags'])."'>";
                echo "  <div class='name_container'>";
                echo "      <h3>".$p['name']."</h3>";
                echo "      <label>".$p['category']."</label>";
                echo "  </div>";
                echo "  <img src='images/".$p['image']."' alt='pizza' />";
                echo "  <span>".$p['price']."</span>";
                //echo "  <span><img src='images/expand.svg' alt='See more' /></span>";
                echo "  <div class='description'>";
                echo "      <div class='name'>".$p['name']." ".$p['category']."</div>";
                echo "      <div class='ingredients'>".$p['ingredients']."</div>";
                echo "      <div class='tags'>".implode(' - ', $p['tags'])."</div>";
                echo "      <div class='price'>".$p['price']."</div>";
                echo "  </div>";
                echo "</post>";
            }
        ?>
        <div class='separator'></div>
        <div class='separator'></div>
        <div class='separator'></div>
        <div class='separator'></div>
        </main>
    <?php include_once('footer.php'); ?>
    <script type='text/javascript' src='scripts/catering.js'></script>
</body>
</html>