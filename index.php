<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Badwords</title>
  </head>
  <body>

    <?php

      //Creo una variabile contenente un paragrafo di testo:
      $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      //Stampo a schermo, il contenuto della var 'paragrafo':
      // echo $paragrafo;

      //Calcola la lunghezza di una stringa e la stampa a schermo attraverso echo:
      echo strlen ( $paragrafo ); 

      //Sostituisco la "bad word" ("Lorem" in questo caso) passata in GET (http://localhost/php-badwords/index.php?nome=Lorem) con 3 asterischi:
      $paragrafo = str_replace($_GET['nome'], '***', $paragrafo);
      echo $paragrafo;

    ?>

  </body>
</html>
