

<?php
// Initialize variables
$lignes = isset($_GET['a']) ? (int)$_GET['a'] : 0;
$border = isset($_GET['b']) ? (int)$_GET['b'] : 0;
$columns = isset($_GET['c']) ? (int)$_GET['c'] : 0;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // int test
    if ($lignes<0 || $border<0 || $columns<0 || !is_int($lignes) || !is_int($border) || !is_int($columns)) {
        echo "<p style='color: red;'>svp un nembre entier</p>";
    } else {
        //  table
        echo "<table style='border-collapse: collapse;'>";

        for ($i = 0; $i < $lignes; $i++) {
            echo "<tr>";

            for ($j = 0; $j < $columns; $j++) {
                echo "<td style='border: {$border}px solid black; width: 50px; height: 30px;'></td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    }
}
?>