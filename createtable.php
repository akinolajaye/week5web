<!DOCTYPE html>
<html lang="en">
<head>
<title>Create Table</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  background-color:#aaaabb;}
table.table{
  font-size:1.5em;
  text-align:center;
  width:60%;
  margin-left:auto;
  margin-right:auto;
  border-style:outset;
  border-width:0.3em;
  border-color:#6666dd;}
th.head{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#44bbbb;}
td.cell1{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#8888ff;}
td.cell2{
  border-style:inset;
  border-width:0.15em;
  border-color:#9999ff;
  background-color:#88ff88;
}
td:hover{
  background-color:#ffbbff;}

</style>
<title>PHP generated table </title>
</head>

<body>
<!-- two rows of numbers using HTML  --> 
<table class="table" >
<caption>table</caption>
  <tr>
	<th class="head">Heading 1</th> <th class="head">Heading 2</th> <th class="head">Heading 3</th>
  </tr>
  <tr>
    <td class="cell1">1</td><td class="cell1">1</td><td class="cell1">1</td>
  </tr>
  <tr>
    <td class="cell1">2</td><td class="cell1">2</td><td class="cell1">2</td>
  </tr>
</table>
<br>

<!-- Task1: use PHP to create 10 rows of numbers with alternative colours along each column   -->
<table class="table">
<tr>
	<th class="head">Heading 1</th><th class="head">Heading 2</th><th class="head">Heading 3</th>

</tr>
<?php

  for($i=1;$i<=10;$i++){
    echo '<tr>';


      echo '<td class= "cell1"  >'.$i. '</td>';
      echo '<td class= "cell2"  >'.$i. '</td>';
      echo '<td class= "cell1"  >'.$i. '</td>';

    echo '</tr>';

  }

?>

</table>
<br>
<br>

<!-- Task2: use PHP to create 10x10 multiplication table --> 
<table class="table">
<caption>table</caption>
<th class="head" colspan="10" >10x10</th>
<?php
$NumRows=10;
for($i=1;$i<=$NumRows;$i++){
  echo '<tr>';
    
    for($j=1;$j<=$NumRows;$j++){
      echo '<td class="cell1">'.$i*$j.'</td>';
    }

  echo '</tr>';
  }
?>
</table>

<br>

</table>

</body>
</html>