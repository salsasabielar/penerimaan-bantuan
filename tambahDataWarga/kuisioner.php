<?php
"<div class='post_title'><b>Ceklis jawaban yang anda yakini benar.</b></div><br/><br/>

<table cellpadding='5' width='100%'>
  <tr>
    <th width='22' rowspan='2' bgcolor='#6f6f6f'><div align='center'><span class='style10'>No</span></div></th>
    <th rowspan='2' bgcolor='#6f6f6f'><div align='center'><span class='style10'>HARAPAN</span></div></th>
    <th bgcolor='#6f6f6f' colspan='4'><div align='center'>Tentukan Tingkat kepuasan Anda</div></th>
  </tr>
  <tr>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Tidak Tercapai </span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Cukup Tercapai </span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'> Tercapai</span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Sangat Tercapai </span></div></th>
  </tr>
   <tr>";
    $koneksi = mysqli_connect ("localhost","root","", "bantuan");
    $tampil ="SELECT * FROM kriteria ORDER BY id_kriteria desc";
	$hasil=mysqli_query($koneksi,$tampil); 
	$no1=0;
	$no2=0;
	// $no3=0;
	// $no4=0;
	$nu=1;
	while ($data=mysqli_fetch_array($hasil)){
		if(($nu % 2)==0){
			$warna="#cecece";
		  }
		  else{
			$warna="#e3e3e3";
		  }
		echo "<tr bgcolor=$warna><td>$nu</td><td>$data[nama]</td>
				<td><input type=checkbox name=cek1[] value=$data[id_kriteria] id=id1$no1></td>
				<td><input type=checkbox name=cek2[] value=$data[id_kriteria] id=id2$no2></td>";  
		$nu++;
		$no1++;
		$no2++;
        
		echo "<br></tr>";
	}
echo "</tr>
</table><br/><br/>
<input style='margin-left:20px; padding:10px 35px 10px 35px;' type=submit value='Lanjutkan >>>' ><br/><br/>";
?>