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
    <h2>Data la stringa: </h2>


    <?php
    //START Fourth Section PHP Code

     $nomeCognome = 'Vito Gentile';
     echo $nomeCognome;

     //END Fourth Section PHP Code
    ?>


    <h3> Prende una stringa e la trasforma in un array specificando un "delimitatore" <span style="color: lightgrey">(' ' in questo caso)</span> tra gli elementi della stringa:</h3>


    <?php
    //START Five Section PHP Code

      $nomeCognome = explode(' ', $nomeCognome);
      echo 'Piece 1: ';
      echo $nomeCognome[0];
      echo ' ';
      echo 'Piece 2: ';
      echo $nomeCognome[1];

      //END Five Section PHP Code
    ?>

  </body>

</html>
