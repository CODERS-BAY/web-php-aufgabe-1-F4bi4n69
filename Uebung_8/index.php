<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <section>
            <div>
                <form action="index.php" method="POST"> 
                    <input type="submit" name="start" id="start" value="Start"></br>
                </form>
                <?php
                    if(isset($_POST['start'])) {
                        $spieler1 = rand(1, 25);
                        $spieler2 = rand(1, 25);
                        $ges = $spieler1 + $spieler2;

                        echo "Spieler 1: $spieler1 | Spieler 2: $spieler2</br>";
                        echo "</br>";

                        if ($ges >= 25) {
                            if ($spieler1 < $spieler2) {
                                echo "Spieler 2 hat Gewonnen!";
                            } else if ($spieler1 > $spieler2){
                                echo "Spieler 1 hat Gewonnen!";
                            } else {
                                echo "Unentschieden!";
                            }
                        } else {
                            echo "Zahl unter 25, nochmal Würfeln!";
                        }
                    }
                ?>
            </div>
        </section>
    </body>
</html>