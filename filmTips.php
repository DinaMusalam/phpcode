<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php include("header.php"); 
include ("conn1.php")?>


<?php
$sql = "SELECT title, grade, year FROM movies";
$result = mysql_query($sql);
?>
<div id="movie">
<table>
	<tr>
		<th> Title </th>
		<th> Grade </th>
		<th> Year </th>
	</tr>

<?php

if (mysql_num_rows($result) >  0) {
     // output data of each row
     while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "<tr>";
		echo "<td> ". $row["title"]. " </td>";
		echo "<td> ". $row["grade"]. " </td>";
		echo "<td> ". $row["year"] . " </td>";
		echo "</tr>";
		
     }
} else {
     echo "0 results";
}

mysql_close($conn);
?>  

</table>
</div>
<?php
include("footer.php");
?>