<?php include('Header.php') ?>
<body>
<form>
    <div id="generator">
        <h3>Column:</h3> <br><input type="number" name="column" id="column"><br>
        <h3>Row:</h3> <br><input type="number" name="row" id="row"><br>
        <input type="submit" value="Submit" formaction="Table Generator.php">
        <?php
        echo "<table>";
        if (isset($_GET['column']) && !empty($_GET['column'])) {
            $column = (int)$_GET ['column'] ;
        } else {
            $column = 0 ;
        }

        if (isset($_GET['row']) && !empty($_GET['row'])) {
            $row = (int)$_GET ['row'] ;
        } else {
            $row = 0 ;
        }

        for ($x = 0; $x != $row ; $x++)
        {
            echo "\n <tr> \n";
            for($y = 0; $y != $column ; $y++)
            {
                echo "<td style='background-color: rgb($y,$x,0)'> ";
                echo "This is Row ",($x+1), " Column ", ($y+1);
                echo "</td>\n";
            }
            echo "</tr> \n";
        }
        ?>
    </div>
</form>
</body>