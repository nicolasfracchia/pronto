<?php include_once "products-menu.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Pronto - Pizza & Pasta</title>
    <link rel="stylesheet" href="styles/interns.css" />
    <link rel="stylesheet" href="styles/menu.css" />
</head>
<body>
    <?php include_once('header.php'); ?>
    <main class='section_menu'>
        <div class='col_2'>
            <div class='list_container list_container_pizza'>
                <h1>PIZZA BY THE SLICE</h1>
                <ul>
                    <?php
                        foreach($pizza as $p){
                            echo "<li>";
                            echo "  <div>";
                            echo "      <h3>".$p['name']."</h3>";
                            echo "      <label>".$p['ingredients']."</label>";
                            echo "  </div>";
                            echo "  <div>".$p['price']."</div>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class='col_2'>
            <div class='list_container list_container_pasta'>
                <h2>DAILY FRESH MADE<br/>PASTA OF THE DAY</h2>
                <p class='pasta_price'>$13.95</p>
            </div>
            <div class='list_container list_container_salads'>
                <h2>SALADS</h2>
                <ul>
                    <?php
                        foreach($salads as $s){
                            echo "<li>";
                            echo "  <div>";
                            echo "      <h3>".$s['name']."</h3>";
                            echo "      <label>".$s['ingredients']."</label>";
                            echo "  </div>";
                            echo "  <div>".$s['price']."</div>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
            <div class='list_container list_container_pagnota'>
                <h2>PAGNOTA</h2>
                <p class='pagnota_description'>HOME MADE RUSTIC ITALIAN BREAD</p>
                <ul>
                    <?php
                        foreach($pagnota as $p){
                            echo "<li>";
                            echo "  <div>";
                            echo "      <h3>".$p['name']."</h3>";
                            echo "      <label>".$p['ingredients']."</label>";
                            echo "  </div>";
                            echo "  <div>".$p['price']."</div>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class='col_1'>
            <div class='list_container list_container_combos'>
                <h2>COMBO DEALS</h2>
                <ul class='combos_list'>
                    <?php
                        foreach($combos as $c){
                            echo "<li>";
                            echo "  <div>";
                            echo "      <h3>".$c['name']."</h3>";
                            echo "  </div>";
                            echo "  <div>".$c['price']."</div>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </main>
    <?php include_once('footer.php'); ?>
</body>
</html>