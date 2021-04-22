<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./results.css" />
    <title>Risultati</title>
  </head>
  <body>
    <div class="content">
      <h2>Risultati:</h2>
      <div class="grid">
        <?php 
            $num1 = (int)$_POST["n1"];
            $num2 = (int)$_POST["n2"];

            $add = $num1 + $num2;
            $sott = $num1 - $num2;
            $molt = $num1 * $num2;
            $div = $num2 ? bcdiv($num1, $num2, 2) : 'Indefinito';

            echo "
            <div>
              <h4>Addizione</h4>
              <div class=\"res\">$add</div>
            </div>
            <div>
              <h4>Sottrazione</h4>
              <div class=\"res\">$sott</div>
            </div>
            <div>
              <h4>Moltiplicazione</h4>
              <div class=\"res\">$molt</div>
            </div>
            <div>
              <h4>Divisione</h4>
              <div class=\"res\">$div</div>
            </div>
            ";
            
        ?>
      </div>
    </div>
  </body>
</html>
