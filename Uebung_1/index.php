<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <section>
            <div class="artikel">
                <?php $artikel1 = 22.50;
                echo "<p>Artikel 1:  $artikel1 €</p>"
                ?>
            </div>
            <div class="artikel">
                <?php $artikel2 = 12.30;
                echo "<p>Artikel 2:  $artikel2 €</p>"
                ?>
            </div>
            <div class="artikel">
                <?php $artikel3 = 5.20;
                echo "<p>Artikel 3:  $artikel3 €</p>"
                ?>
            </div>
            <div class="summe">
                <?php $netto = $artikel1 + $artikel2 + $artikel3;
                $mwst = $netto / 100 * 20;
                $brutto = $netto + $mwst;
                
                echo "<p>Nettopreis: $netto €</br>Mehrwertssteuer: $mwst €</br>Bruttopreis: $brutto €</p>"
                ?>
            </div>
        </section>
    </body>
</html>