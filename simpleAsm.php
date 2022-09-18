<!-- Loo Mun Hoong -->
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>HTML Table</h1>
    <table>
<?php
    $fname = 'Table_Input.csv';
    $tbOpen = fopen($fname,'r');
    $data = fgetcsv($tbOpen, 1000, ",");
    $csv_arr = [];
    if (($tbOpen = fopen($fname, "r")) !== FALSE) {
      while (($data = fgetcsv($tbOpen, 1000, ",")) !== FALSE) {
        $csv_arr[] = $data;
    }}
    fclose($tbOpen);
?>
    <?php foreach ($csv_arr as $key) { ?>
        <tr>
            <td><?=$key[0]?></td>
            <td><?=$key[1]?></td>
        </tr>
    <?php } ?>
    </table>
<br><hr><br>
<table>
        <h1><b>Simple Assesment</b></h1>
        <tr>
            <th>Category</th>
            <th>Value</th>
            <!--  <th> Result </th> -->
        </tr>
        <tr>
          <td>Alpha</td>
          <!-- <td>A5 + A20</td> -->
          
          <td>
            <?php
              echo $csv_arr[5][1] + $csv_arr[20][1];
            ?>
          </td>
        </tr>

        <tr>
          <td>Beta</td>
          <!-- <td>A15 / A7</td> -->
          <td>
            <?php
              echo $csv_arr[15][1] / $csv_arr[7][1];
            ?>
          </td>
        </tr>
        <tr>
          <td>Charlie</td>
          <!-- <td>A13 * A12</td> -->
          <td>
            <?php
              echo $csv_arr[13][1] * $csv_arr[12][1];
            ?>
          </td>
        </tr>
    </table>

</body>
</html>