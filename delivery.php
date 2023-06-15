<br><br><br><br><br><br>
<img src="Images\Uncle.png"  >
<br><br><br><br><br><br>

<br><br><br><br>
<div class="cancel">
  <br><br>
    <h2 align="center">Dabbawala Details</h2>
</div>

<?php

include "config.php";
$sql = "SELECT *, date_format(from_days(datediff(now(), DWDOB)), '%Y') + 0 as DWAge from Dabbawala";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table style='font-size: 20px; margin: 13px; border: 1px solid black;'>";
  echo "<thead><tr><th>DabbaWala ID</th><th>Name</th><th>Phone No.</th><th>DOB</th><th>Age</th></tr></thead>";
  echo "<tbody>";
  while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["DWId"] . "</td><td>" . $row["DWName"] . "</td><td>" .
            $row["DWPhNo"] . "</td><td>" . $row["DWDOB"] . "</td><td>" . $row["DWAge"] . "</td></tr>";
  }
  echo "</tbody></table>";
} else {
  echo "0 results";
}
$conn->close();

?>
<br><br>