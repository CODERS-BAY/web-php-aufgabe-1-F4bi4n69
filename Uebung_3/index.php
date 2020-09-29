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
                    <input type="radio" name="select" value="1.40" checked>
                    <label for="benzin">Benzin</label></br>
                    <input type="radio" name="select" value="1.30">
                    <label for="diesel">Diesel</label></br>
                    <input type="submit"></br>
                    <?php
                    if (isset($_POST['liter'])){
                        $liter = $_POST['liter'];
                        $select = $_POST['select'];
                        $summe = $liter * $select;
                        echo "Kosten: $summe €";
                    }
                    ?>
                </form>
            </div>
        </section>
    </body>
</html>