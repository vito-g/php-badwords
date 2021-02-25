<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Badwords</title>
  </head>
  <body>

    <h2>Titolo del paragrafo</h2>

    <!-- START First Section PHP Code-->
    <?php

    //Creo una variabile contenente un paragrafo di testo:
    $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    //Stampo a schermo, il contenuto della var 'paragrafo':
    echo $paragrafo;

     ?>
     <!-- END First Section PHP Code-->


    <h4>La lunghezza del paragrafo è di caratteri:


      <!-- START Second Section PHP Code-->
      <?php

        //Calcola la lunghezza di una stringa e la stampa a schermo attraverso 'echo':
        echo strlen ( $paragrafo );

      ?>
      <!-- END Second Section PHP Code-->


    </h4>


    <h3>
      Sostituisco la "bad word" passata in GET (http://localhost/php-badwords/index.php?badWord=Lorem) con 3 asterischi:
    </h3>

    <!-- START Third Section PHP Code-->
    <?php

    //Sostituisco la "bad word" ("Lorem" in questo caso) passata in GET (http://localhost/php-badwords/index.php?nome=Lorem) con 3 asterischi:
    $paragrafo = str_replace($_GET['badWord'], '***', $paragrafo);
    echo $paragrafo;

     ?>
     <!-- END Third Section PHP Code-->

  </body>
</html>
