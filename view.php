<style>
    .tabl{
        padding-left: 10px;
    }
</style>

<div style="margin-top:10px;" class="row">
    <table>
        <tr>
            <th class="tabl">Weight </th>
            <th class="tabl">Height </th>
            <th class="tabl">Pulse </th>
            <th class="tabl">Temperature </th>
            <th class="tabl">BMI </th> </th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "patientrecordss");
        $sql = "SELECT * FROM devicedata";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["weight"] . "</td><td>" . $row["height"] . "</td><td>" . $row["pulseRate"] . "</td><td>" . $row["temperature"] . "</td><td>" . $row["bmi"] . "</td><tr>";
            }
        } else {
            echo "No Results";
        }

        $conn->close();
        ?>
    </table>
</div>