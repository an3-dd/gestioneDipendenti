<html>
    <head>
        <title>DB E PHP TEST: INSERT</title>
    </head>
    <body>
        <?php
        $impiegato=$_GET["Impiegato"];
        $dipartimento=$_GET["Dipartimento"];
        $connection = new mysqli("localhost", "root", "","Azienda");
        $query="SELECT*
                FROM Personale
                WHERE nominativo = '$impiegato'";
        $result = $connection->query($query);
        if($result->num_rows != 0){
            echo "Impiegato $impiegato presente.";
        }
        else{
            $query="INSERT INTO Personale VALUES(0,'$impiegato','$dipartimento')";
            $connection->query($query);
            echo "Impiegato $impiegato aggiunto";
        } 
        $result->free();
        $connection->close();
        ?><br><br>
        <a href="http://localhost/Cartella%20senza%20nome/Azienda.php">
            Visualizza elenco Personale
        </a>

    </body>
</html>