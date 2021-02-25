<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Badwords/BONUS</title>
  </head>
  <body>

    <h2>Titolo del paragrafo</h2>

    <?php
    //START First Section PHP Code

    //Creo una variabile contenente un paragrafo di testo:
    $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    //Stampo a schermo, il contenuto della var 'paragrafo':
    echo $paragrafo;

    //END First Section PHP Code
    ?>


    <h4>La lunghezza del paragrafo è di caratteri:</h4>


      <?php
      //START Second Section PHP Code

        //Calcola la LUNGHEZZA di una STRINGA e la stampa a schermo attraverso la FX 'echo':
        echo strlen($paragrafo);

      //END Second Section PHP Code
      ?>



<!-- --------------------------------------------------------------------------------------------------->
    <h3>
      Sostituisco la "bad word" passata in GET <span style="color: lightgrey">(http://localhost/php-badwords/index.php?badWord=Lorem)</span>  con 3 asterischi:
    </h3>

    <?php
    //START Third Section PHP Code

    //Sostituisco la "bad word" ("Lorem" in questo caso) passata in GET (http://localhost/php-badwords/index.php?nome=Lorem) con 3 asterischi:
    $paragrafo = str_replace($_GET['badWord'], '***', $paragrafo);
    echo $paragrafo;

    //END Third Section PHP Code
     ?>


    <br><br>

<!-- --------------------------------------------------------------------------------------------------->

    <h3> EXPLODE FX: Prende il paragrafo (stringa), come scritto sopra, e lo trasforma in un array specificando un "delimitatore" <span style="color: lightgrey">(' ' in questo caso)</span> tra gli elementi della stringa:</h3>


    <?php
    //START Five Section PHP Code

      $paragrafo = explode(' ', $paragrafo);
      echo 'Piece 1: ';
      echo $paragrafo[0];
      echo '; ';
      echo 'Piece 2: ';
      echo $paragrafo[1];
      echo '; ';
      echo 'Piece 5: ';
      echo $paragrafo[4];
      echo '; ';
      echo 'Piece 69: ';
      echo $paragrafo[68];

    //END Five Section PHP Code
    ?>
<!-- ----------------------------------------------------------------------------------------------->

  <h3>TRIM FX - toglierà gli spazi bianchi all’inizio e alla fine di una stringa</h3>
  <mark>

    <?php
    $stringa = '  ipsum dolor sit amet, ';
    trim($stringa);
    echo $stringa;

    ?>
    
  </mark>

  </body>

</html>
