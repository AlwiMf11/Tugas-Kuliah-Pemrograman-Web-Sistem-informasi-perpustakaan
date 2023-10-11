<?php
include '../connection.php' ; ?>
 <form class = 'cari' action="cari.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>



<?php
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<?php
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query("select * from db_perpus where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query("select * from db_perpus");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
?>
<tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Cover</th>
                    <th width="20%">Pilihan</th>
                </tr>
	<?php } ?>
</table>