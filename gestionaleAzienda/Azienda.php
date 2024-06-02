<html>
    <head>
        <title>DB E PHP TEST</title>
    </head>
    <BODY>
        <?php
        $connection = new mysqli("localhost","root","","Azienda");
        $query = "SELECT matricola,nominativo,denominazione
                  FROM Personale, Dipartimenti
                  WHERE Personale.id_dipartimento=Dipartimenti.id_dipartimento
                  ORDER BY nominativo";
        $result = $connection->query($query); 
        if ($result->num_rows != 0){
            echo "<table border>";
            echo "<tr>";
            echo "<th>Matricola</th>";
            echo "<th>Impiegato</th>";
            echo "<th>Città</th>";
            echo "</tr>";

            while ($row = $result->fetch_array())
            {
                echo "<tr>";
                echo "<td> {$row['matricola']} </td>";
                echo "<td> {$row['nominativo']} </td>";
                echo "<td> {$row['denominazione']} </td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        $result->free();
        $connection->close();
        ?><br>

        <a href="http://localhost/Cartella%20senza%20nome/add.php">
            Aggiungi un nuovo impiegato.
        </a><br>
        <a href="http://localhost/Cartella%20senza%20nome/del.php">
            Elimina un impietgato.
         </a><br>
        
    </BODY>
</html>