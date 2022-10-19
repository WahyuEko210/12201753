<?php
$data=file_get_contents("https://datasekolahapi.herokuapp.com/api/data");
$datasekolah=json_decode($data);
//echo "<pre>";print_r($datasekolah->SD->Jakarta->Kepulauan_Seribu);
$table = "<h3>Sekolah SD di Jakarta</h3>";
$table .= "<table border=1>
			<tr><td>No</td>
			    <td>Nama SD</td>
				<td>NPSN</td>
				<td>Alamat</td>
				<td>Kode Pos</td>
				<td>Desa</td>
                <td>Kecamatan</td>
                <td>Kabupaten</td>
                <td>Provinsi</td></tr>";
for($i=0;$i<count($datasekolah->SD->Jakarta->Kepulauan_Seribu);$i++){
	$no=$i+1;
	$table .= "<tr><td>{$no}</td>
			    <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->nama}</td>
				<td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->npsn}</td>
				<td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->alamat}</td>
				<td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kodepos}</td>
				<td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->desa}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kecamatan}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kabupaten}</td>
                <td>{$datasekolah->SD->Jakarta->Kepulauan_Seribu[$i]->provinsi}</td></td>
				</tr>";
}
$table .= "</table>";
echo $table;				
?>