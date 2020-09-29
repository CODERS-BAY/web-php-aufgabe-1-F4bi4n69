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
                    <label for="liter">Liter: </label></br>
                    <input type="text" name="liter" value="1"></br>
                    <label for="sorte">Sorte: </label></br>
                    <input type="text" name="sorte" value="N = Normal │ S = Super"></br>
                    <input type="submit"></br>
                    <?php
                    if (isset($_POST['sorte'])) {
                        if ($_POST['sorte'] == "N") {
                            $preis = 1.40;
                        } else {
                            $preis = 1.50;
                        }
                    }
                    if (isset($_POST['liter'])){
                        $liter = $_POST['liter'];
                        $summe = $liter * $preis;
                        echo "Kosten: $summe €";
                    }
                    ?>
                </form>
            </div>
        </section>
    </body>
</html>