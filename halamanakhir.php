<?php
    session_start();
    $data = $_SESSION['data'];
?>
<table border="1" style="text-align: Center; border-spacing: 0; width: 60%;" align="center">
    <tr>
        <th width="25%">Hobi</th>
        <th>Gambar</th>
        <th>Option</th>
    </tr>
            <?php
                for ($i = 0; $i < count($data) ; $i++) { 
                    echo"<tr>";
                    echo "<td>";
                    for ($j = 0; $j < count($data[$i]["Hobi"]) ; $j++) { 
                        echo $data[$i]["Hobi"][$j]."<br>";
                    }
                    echo "</td>";
                    echo "<td>";
                    ?>
                    <img src="<?php echo $data[$i]["Foto"];?>" width="15%">
                    <?php
                    echo "</td>";
                    echo "<td>";
                    ?>
                    <a href="formawal.html">Hapus</a>
                    <?php
                    echo "</td>";
                    echo"</tr>";
                }
            ?>
</table>
