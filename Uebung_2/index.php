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
                    <label for="zahl">Bitte Zahl eingeben: </label></br>
                    <input type="text" name="zahl" value="0"></br>
                    <input type="submit"></br>
                    <?php
                    if (isset($_POST['zahl'])){
                        $zahl = $_POST['zahl'];
                        $zahl = $zahl * $zahl;
                        echo "Ergebnis: $zahl";
                    }
                    ?>
                </form>
            </div>
        </section>
    </body>
</html>