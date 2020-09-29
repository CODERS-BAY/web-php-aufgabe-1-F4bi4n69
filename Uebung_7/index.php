<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <section>
            <div>
                <?php
                // Zeile 1 \\
                $zeile1 = 13;
                $rechnung1 = 4;
                for ($i = 0; $i < 6; $i++) {
                    echo "$zeile1 ";
                    $zeile1 += $rechnung1;
                }
                echo "</br>";
                // Zeile 2 \\
                $zeile2 = 2;
                $rechnung2 = 0.5;
                for ($i = 0; $i < 7; $i++) {
                    echo "$zeile2 ";
                    $zeile2 -= $rechnung2;
                }
                echo "</br>";
                // Zeile 3 \\
                $zeile3 = 2000;
                $rechnung3 = 1000;
                for ($i = 0; $i < 5; $i++) {
                    echo "$zeile3 ";
                    $zeile3 += $rechnung3;
                }
                echo "</br>";
                // Zeile 4 \\
                $zeile4 = 5;
                $rechnung4 = 2;
                $zeichen4 = "Z";
                for ($i = 0; $i < 5; $i++) {
                    echo "$zeichen4$zeile4 ";
                    $zeile4 += $rechnung4;
                }
                echo "</br>";
                // Zeile 5 \\
                $zeile5 = 1;
                $zeichen51 = "a";
                $zeichen52 = "b";
                for ($i = 0; $i < 3; $i++) {
                    echo "$zeichen51 $zeichen52$zeile5 ";
                    $zeile5++;
                }
                echo "</br>";
                // Zeile 6 \\
                $zeile6 = 2;
                $rechnung6 = 9;
                $zeichen6 = "c";
                for ($i = 0; $i < 3; $i++) {
                    echo "$zeichen6$zeile6 ";
                    $zeile6++;
                    echo "$zeichen6$zeile6 ";
                    $zeile6 += $rechnung6;

                }
                echo "</br>";
                // Zeile 7 \\
                $zeile7 = 13;
                $rechnung7 = 4;
                $rechnung71 = 12;
                for ($i = 0; $i < 7; $i++) {
                    if ($zeile7 == 21) {
                        echo "$zeile7 ";
                        $zeile7 += $rechnung71;
                    } else {
                        echo "$zeile7 ";
                        $zeile7 += $rechnung7;
                    }
                }
                ?>
            </div>
        </section>
    </body>
</html>