<html>
    <head>
        <title>DB & PHP: DELETE</title>
    </head>
    <body>
        <?php
        $impiegato = $_GET["Impiegato"];
        $connection = new mysqli("localhost","root","","Azienda");
        $query="DELETE FROM Personale WHERE nominativo = '$impiegato' ";
        $result=$connection->query($query);
        $connection->close();
        echo "Impiegato eliminato";
        ?>
        <br><br>
        <a href="http://localhost/Cartella%20senza%20nome/Azienda.php">
            Visualizza elenco impiegati.
        </a>
    </body>
</html>