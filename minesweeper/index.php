<p id="title">Minesweeper</p>
<table style="width:100%">
<?php 
for($i=1;$i<=8;$i++){
echo"<tr>";
	for($j=1;$j<=8;$j++){
		echo"<td id='cell-".$i."x".$j."'></td>";
	}
echo"</tr>";
}
?>
</table>
