<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
Tutto ciò che volete provare in più nel vostro codice inseritelo in un file bonus.php -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
            // Stampare a schermo il paragrafo.
            $str = "«Ezechiele 25,17. Il cammino dell'uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi. Benedetto sia colui che nel nome della carità e della buona volontà conduce i deboli attraverso la valle delle tenebre; perché egli è in verità il pastore di suo fratello e il ricercatore dei figli smarriti. E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno su coloro che si proveranno ad ammorbare e infine a distruggere i miei fratelli. E tu saprai che il mio nome è quello del Signore quando farò calare la mia vendetta sopra di te.» <br/> <br/>";
            echo $str;
            
            // e la sua lunghezza
            $lunghezza = strlen($str);
            echo "Il passo biblico ha una lunghezza di {$lunghezza} caratteri. <br/> <br/>";

            // Una parola da censurare viene passata dall’utente tramite parametro GET.
            $str = str_replace('Signore', '***', $str);
            echo $str;
        ?>
    </main>

    
</body>
</html>