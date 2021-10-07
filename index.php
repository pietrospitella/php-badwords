<?php
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    $sentence = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum aliquid rem beatae voluptas error nihil consequuntur hic ratione sunt architecto ex quos esse vero illo, earum ut assumenda! Perspiciatis, quis.';
    $lenSentence = strlen($sentence);
    // Una parola da censurare viene passata dall'utente tramite parametro GET.
    $badword = $_GET['badword'];
    // Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    $censoredSentence = str_replace($badword, '***', $sentence);
?>

<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<h1>Lorem Ipsum</h1>
<p><?php echo $sentence?></p>
<h3>Lunghezza paragrafo: <?php echo $lenSentence ?> battiture</h3>

<h2>Testo censurato :</h2>
<p><?php echo $censoredSentence ?></p>


