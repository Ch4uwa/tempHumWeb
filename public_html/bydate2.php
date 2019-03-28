<div class="card">
    <h2></h2>
    <h4></h4>
    <form method="post">
        <label>
            Choose Date:
            <input type="date" name="date">
        </label>
        <br>
        <label>
            Display AVG Values:
            <input type="checkbox" name="avg" value="YES">
        </label>
        <input type="submit">
    </form>
    <br>
    <br>
    <table align='center'>
        <tr>
            <td>&nbsp;Name&nbsp;</td>
            <td>&nbsp;Timestamp&nbsp;</td>
            <td>&nbsp;Temperature&nbsp;</td>
            <td>&nbsp;Humidity&nbsp;</td>
        </tr>
        <?php
        include("connect.php");
        $link = Connection();
        $date = $_POST["date"];
        $avg = $_POST["avg"];
        if (!empty($avg)) {
            $query = "SELECT `name`, `timeStamp`, AVG(temperature) AS temperature, AVG(humidity) AS humidity FROM `Timmie`";
        } else {
            $query = "SELECT * FROM `Timmie`";
        }
        if (!empty($date)) {
            $query .= " WHERE timeStamp LIKE '$date%'";
        }

        $query .= " ORDER BY TIMESTAMP DESC";

        $result1 = mysqli_query($link, $query);

        if ($result1 !== false) {

            while ($row = mysqli_fetch_array($result1)) {

                printf(
                    "<tr>
                <td>&nbsp;%s&nbsp;</td>
                <td>&nbsp;%s&nbsp;</td>
                <td>&nbsp;%s&nbsp;</td>
                <td>&nbsp;%s&nbsp;</td>
                </tr>",
                    $row["name"],
                    $row["timeStamp"],
                    $row["temperature"],
                    $row["humidity"]
                );
            }

            mysqli_free_result($result1);
            mysqli_close($link);
        };
        ?>
    </table>
</div>
