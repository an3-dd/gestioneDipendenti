<html>
<head>
    <title>DB & PHP TEST: DEL</title>
</head>
<body>
    <?php
    $connection = new mysqli("localhost", "root", "", "Azienda");
    $query = "SELECT nominativo FROM Personale ORDER BY nominativo";
    $result = $connection->query($query);
    if ($result->num_rows != 0) {
        ?>
        <form action="delete.php" method="GET"><br>
            Impiegato da eliminare <br>
            <select name="Impiegato">
            <?php
            while ($row = $result->fetch_array()) {
                echo "<option value=\"" . $row['nominativo'] . "\">" . $row['nominativo'] . "</option>";
            }
            ?>
            </select><br><br>
            <input type="submit" value="Elimina">
        </form>
        <?php
    } else {
        echo "nessun impiegato presente nel database";
    }
    $result->free();
    $connection->close();
    ?>
</body>
</html>