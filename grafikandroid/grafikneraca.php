
<?php
	include "../apl_koneksi.php";

	$bulan = date('m');
$tahun = date('Y');

if ($bulan=="01"){
	$angka = 'Januari';
}
else if ($bulan=="02"){
	$angka = 'Februari';
}
else if ($bulan=="03"){
	$angka = 'Maret';
}
else if ($bulan=="04"){
	$angka = 'April';
}
else if ($bulan=="05"){
	$angka = 'Mei';
}
else if ($bulan=="06"){
	$angka = 'Juni';
}
else if ($bulan=="07"){
	$angka = 'Juli';
}
else if ($bulan=="08"){
	$angka = 'Agustus';
}
else if ($bulan=="09"){
	$angka = 'September';
}
else if ($bulan=="10"){
	$angka = 'Oktober';
}
else if ($bulan=="11"){
	$angka = 'November';
}
else if ($bulan=="12"){
	$angka = 'December';
}


$query = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=$bulan";
$sql = mysqli_query($conn,$query);
while($data = mysqli_fetch_array($sql)){
		$jumlah = $data['jumlah'];
}

$query2 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=$bulan";
$sql2 = mysqli_query($conn,$query2);
while($data2 = mysqli_fetch_array($sql2)){
		$jumlah2 = $data2['jumlah'];
}

$query3 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='$angka' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql3 = mysqli_query($conn,$query3);
while($data3 = mysqli_fetch_array($sql3)){
		$jumlah3 = $data3['jumlah'];
}

$query4 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='$angka' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql4 = mysqli_query($conn,$query4);
while($data4 = mysqli_fetch_array($sql4)){
		$jumlah4 = $data4['jumlah'];
}

$query5 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=$bulan";
$sql5 = mysqli_query($conn,$query5);
while($data5 = mysqli_fetch_array($sql5)){
		$jumlah5 = $data5['jumlah'];
}





	
	//monitoring
	$suhu = array();
	$kelembaban = array();
	$waktu = array();

	$query6 = "SELECT * FROM `apl_sensor` ORDER BY Waktu ASC LIMIT 10";
	$sql6 = mysqli_query($conn,$query6);
	while($data6 = mysqli_fetch_array($sql6)){
		$suhu[] = intval($data6['Suhu']);
		$kelembaban[] = intval($data6['Kelembapan']);
		$waktu[]=$data6['Waktu'];
		
	}


//ini untuk grafik
//januari
include "../apl_koneksi.php";
$query7 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=01";
$sql7 = mysqli_query($conn,$query7);
while($data7 = mysqli_fetch_array($sql7)){
		$jumlah7 = $data7['jumlah'];
}

$query8 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=01";
$sql8 = mysqli_query($conn,$query8);
while($data8 = mysqli_fetch_array($sql8)){
		$jumlah8 = $data8['jumlah'];
}

$query9 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Januari' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql9 = mysqli_query($conn,$query9);
while($data9 = mysqli_fetch_array($sql9)){
		$jumlah9 = $data9['jumlah'];
}

$query10 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Januari' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql10 = mysqli_query($conn,$query10);
while($data10 = mysqli_fetch_array($sql10)){
		$jumlah10 = $data10['jumlah'];
}

$query11 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=01";
$sql11 = mysqli_query($conn,$query11);
while($data11 = mysqli_fetch_array($sql11)){
		$jumlah11 = $data11['jumlah'];
}

$besar = ($jumlah7 + $jumlah8 ) - ($jumlah9+$jumlah10+$jumlah11);
$januari= intval($besar);
	
	
//februari
$query12 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=02";
$sql12 = mysqli_query($conn,$query12);
while($data12 = mysqli_fetch_array($sql12)){
		$jumlah12 = $data12['jumlah'];
}

$query13 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=02";
$sql13 = mysqli_query($conn,$query13);
while($data13 = mysqli_fetch_array($sql13)){
		$jumlah13 = $data13['jumlah'];
}

$query14 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Februari' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql14 = mysqli_query($conn,$query14);
while($data14 = mysqli_fetch_array($sql14)){
		$jumlah14 = $data14['jumlah'];
}

$query15 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Februari' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql15 = mysqli_query($conn,$query15);
while($data15 = mysqli_fetch_array($sql15)){
		$jumlah15 = $data15['jumlah'];
}

$query16 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=02";
$sql16 = mysqli_query($conn,$query16);
while($data16 = mysqli_fetch_array($sql16)){
		$jumlah16 = $data16['jumlah'];
}

$besar2 = ($jumlah12 + $jumlah13 ) - ($jumlah14+$jumlah15+$jumlah16);
$februari= intval($besar2);

//maret
$query17 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=03";
$sql17 = mysqli_query($conn,$query17);
while($data17 = mysqli_fetch_array($sql17)){
		$jumlah17 = $data17['jumlah'];
}

$query18 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=03";
$sql18 = mysqli_query($conn,$query18);
while($data18 = mysqli_fetch_array($sql18)){
		$jumlah18 = $data18['jumlah'];
}

$query19 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Maret' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql19 = mysqli_query($conn,$query19);
while($data19 = mysqli_fetch_array($sql19)){
		$jumlah19 = $data19['jumlah'];
}

$query20 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Maret' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql20 = mysqli_query($conn,$query20);
while($data20 = mysqli_fetch_array($sql20)){
		$jumlah20 = $data20['jumlah'];
}

$query21 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=03";
$sql21 = mysqli_query($conn,$query21);
while($data21 = mysqli_fetch_array($sql21)){
		$jumlah21 = $data21['jumlah'];
}

$besar3 = ($jumlah17 + $jumlah18 ) - ($jumlah19+$jumlah20+$jumlah21);
$maret= intval($besar3);


//april
$query22 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=04";
$sql22 = mysqli_query($conn,$query22);
while($data22 = mysqli_fetch_array($sql22)){
		$jumlah22 = $data22['jumlah'];
}

$query23 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=04";
$sql23 = mysqli_query($conn,$query23);
while($data23 = mysqli_fetch_array($sql23)){
		$jumlah23 = $data23['jumlah'];
}

$query24 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='April' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql24 = mysqli_query($conn,$query24);
while($data24 = mysqli_fetch_array($sql24)){
		$jumlah24 = $data24['jumlah'];
}

$query25 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='April' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql25 = mysqli_query($conn,$query25);
while($data25 = mysqli_fetch_array($sql25)){
		$jumlah25 = $data25['jumlah'];
}

$query26 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=04";
$sql26 = mysqli_query($conn,$query26);
while($data26 = mysqli_fetch_array($sql26)){
		$jumlah26 = $data26['jumlah'];
}

$besar4 = ($jumlah22 + $jumlah23 ) - ($jumlah24+$jumlah25+$jumlah26);
$april= intval($besar4);

//mei
$query27 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=05";
$sql27 = mysqli_query($conn,$query27);
while($data27 = mysqli_fetch_array($sql27)){
		$jumlah27 = $data27['jumlah'];
}

$query28 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=05";
$sql28 = mysqli_query($conn,$query28);
while($data28 = mysqli_fetch_array($sql28)){
		$jumlah28 = $data28['jumlah'];
}

$query29 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Mei' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql29 = mysqli_query($conn,$query29);
while($data29 = mysqli_fetch_array($sql29)){
		$jumlah29 = $data29['jumlah'];
}

$query30 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Mei' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql30 = mysqli_query($conn,$query30);
while($data30 = mysqli_fetch_array($sql30)){
		$jumlah30 = $data30['jumlah'];
}

$query31 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=05";
$sql31 = mysqli_query($conn,$query31);
while($data31 = mysqli_fetch_array($sql31)){
		$jumlah31 = $data31['jumlah'];
}

$besar5 = ($jumlah27 + $jumlah28 ) - ($jumlah29+$jumlah30+$jumlah31);
$mei= intval($besar5);

//juni
$query32 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=06";
$sql32 = mysqli_query($conn,$query32);
while($data32 = mysqli_fetch_array($sql32)){
		$jumlah32 = $data32['jumlah'];
}

$query33 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=06";
$sql33 = mysqli_query($conn,$query33);
while($data33 = mysqli_fetch_array($sql33)){
		$jumlah33 = $data33['jumlah'];
}

$query34 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Juni' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql34 = mysqli_query($conn,$query34);
while($data34 = mysqli_fetch_array($sql34)){
		$jumlah34 = $data34['jumlah'];
}

$query35 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Juni' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql35 = mysqli_query($conn,$query35);
while($data35 = mysqli_fetch_array($sql35)){
		$jumlah35 = $data35['jumlah'];
}

$query36 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=06";
$sql36 = mysqli_query($conn,$query36);
while($data36 = mysqli_fetch_array($sql36)){
		$jumlah36 = $data36['jumlah'];
}

$besar6 = ($jumlah32 + $jumlah33 ) - ($jumlah34+$jumlah35+$jumlah36);
$juni= intval($besar6);

//juli
$query37 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=07";
$sql37 = mysqli_query($conn,$query37);
while($data37 = mysqli_fetch_array($sql37)){
		$jumlah37 = $data37['jumlah'];
}

$query38 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=07";
$sql38 = mysqli_query($conn,$query38);
while($data38 = mysqli_fetch_array($sql38)){
		$jumlah38 = $data38['jumlah'];
}

$query39 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Juli' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql39 = mysqli_query($conn,$query39);
while($data39 = mysqli_fetch_array($sql39)){
		$jumlah39 = $data39['jumlah'];
}

$query40 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Juli' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql40 = mysqli_query($conn,$query40);
while($data40 = mysqli_fetch_array($sql40)){
		$jumlah40 = $data40['jumlah'];
}

$query41 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=07";
$sql41 = mysqli_query($conn,$query41);
while($data41 = mysqli_fetch_array($sql41)){
		$jumlah41 = $data41['jumlah'];
}

$besar7 = ($jumlah37 + $jumlah38 ) - ($jumlah39+$jumlah40+$jumlah41);
$juli= intval($besar7);

//agustus
$query42 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=08";
$sql42 = mysqli_query($conn,$query42);
while($data42 = mysqli_fetch_array($sql42)){
		$jumlah42 = $data42['jumlah'];
}

$query43 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=08";
$sql43 = mysqli_query($conn,$query43);
while($data43 = mysqli_fetch_array($sql43)){
		$jumlah43 = $data43['jumlah'];
}

$query44 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Agustus' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql44 = mysqli_query($conn,$query44);
while($data44 = mysqli_fetch_array($sql44)){
		$jumlah44 = $data44['jumlah'];
}

$query45 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Agustus' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql45 = mysqli_query($conn,$query45);
while($data45 = mysqli_fetch_array($sql45)){
		$jumlah45 = $data45['jumlah'];
}

$query46 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=08";
$sql46 = mysqli_query($conn,$query46);
while($data46 = mysqli_fetch_array($sql46)){
		$jumlah46 = $data46['jumlah'];
}

$besar8 = ($jumlah42 + $jumlah43 ) - ($jumlah44+$jumlah45+$jumlah46);
$agustus= intval($besar8);


//september
$query47 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=09";
$sql47 = mysqli_query($conn,$query47);
while($data47 = mysqli_fetch_array($sql47)){
		$jumlah47 = $data47['jumlah'];
}

$query48 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=09";
$sql48 = mysqli_query($conn,$query48);
while($data48 = mysqli_fetch_array($sql48)){
		$jumlah48 = $data48['jumlah'];
}

$query49 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='September' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql49 = mysqli_query($conn,$query49);
while($data49 = mysqli_fetch_array($sql49)){
		$jumlah49 = $data49['jumlah'];
}

$query50 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='September' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql50 = mysqli_query($conn,$query50);
while($data50 = mysqli_fetch_array($sql50)){
		$jumlah50 = $data50['jumlah'];
}

$query51 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=09";
$sql51 = mysqli_query($conn,$query51);
while($data51 = mysqli_fetch_array($sql51)){
		$jumlah51 = $data51['jumlah'];
}

$besar9 = ($jumlah47 + $jumlah48 ) - ($jumlah49+$jumlah50+$jumlah51);
$september= intval($besar9);

//oktober
$query52 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=10";
$sql52 = mysqli_query($conn,$query52);
while($data52 = mysqli_fetch_array($sql52)){
		$jumlah52 = $data52['jumlah'];
}

$query53 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=10";
$sql53 = mysqli_query($conn,$query53);
while($data53 = mysqli_fetch_array($sql53)){
		$jumlah53 = $data53['jumlah'];
}

$query54 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Oktober' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql54 = mysqli_query($conn,$query54);
while($data54 = mysqli_fetch_array($sql54)){
		$jumlah54 = $data54['jumlah'];
}

$query55 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Oktober' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql55 = mysqli_query($conn,$query55);
while($data55 = mysqli_fetch_array($sql55)){
		$jumlah55 = $data55['jumlah'];
}

$query56 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=10";
$sql56 = mysqli_query($conn,$query56);
while($data56 = mysqli_fetch_array($sql56)){
		$jumlah56 = $data56['jumlah'];
}

$besar10 = ($jumlah52 + $jumlah53 ) - ($jumlah54+$jumlah55+$jumlah56);
$oktober= intval($besar10);


//november
$query57 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=11";
$sql57 = mysqli_query($conn,$query57);
while($data57 = mysqli_fetch_array($sql57)){
		$jumlah57 = $data57['jumlah'];
}

$query58 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=11";
$sql58 = mysqli_query($conn,$query58);
while($data58 = mysqli_fetch_array($sql58)){
		$jumlah58 = $data58['jumlah'];
}

$query59 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='November' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql59 = mysqli_query($conn,$query59);
while($data59 = mysqli_fetch_array($sql59)){
		$jumlah59 = $data59['jumlah'];
}

$query60 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='November' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql60 = mysqli_query($conn,$query60);
while($data60 = mysqli_fetch_array($sql60)){
		$jumlah60 = $data60['jumlah'];
}

$query61 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=11";
$sql61 = mysqli_query($conn,$query61);
while($data61 = mysqli_fetch_array($sql61)){
		$jumlah61 = $data61['jumlah'];
}

$besar11 = ($jumlah57 + $jumlah58 ) - ($jumlah59+$jumlah60+$jumlah61);
$november= intval($besar11);

//desember
$query62 = "SELECT sum(Jumlah) as jumlah FROM `apl_pemasukanlain` WHERE YEAR(apl_pemasukanlain.Tanggal)=$tahun AND MONTh(apl_pemasukanlain.Tanggal)=12";
$sql62 = mysqli_query($conn,$query62);
while($data62 = mysqli_fetch_array($sql62)){
		$jumlah62 = $data62['jumlah'];
}

$query63 = "SELECT sum(Total_Pemasukan) as jumlah FROM `apl_penjualan` WHERE YEAR(apl_penjualan.Tanggal_Penjualan)=$tahun AND MONTh(apl_penjualan.Tanggal_Penjualan)=12";
$sql63 = mysqli_query($conn,$query63);
while($data63 = mysqli_fetch_array($sql63)){
		$jumlah63 = $data63['jumlah'];
}

$query64 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Desember' AND Tahun=$tahun AND Status_Pengambilan=1";
$sql64 = mysqli_query($conn,$query64);
while($data64 = mysqli_fetch_array($sql64)){
		$jumlah64 = $data64['jumlah'];
}

$query65 = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Bulan='Desember' AND Tahun=$tahun AND Status_Pengambilan=0";
$sql65 = mysqli_query($conn,$query65);
while($data65 = mysqli_fetch_array($sql65)){
		$jumlah65 = $data65['jumlah'];
}

$query66 = "SELECT sum(Total_Pembelian) as jumlah FROM `apl_pembelian` WHERE YEAR(apl_pembelian.Tanggal_Beli)=$tahun AND MONTh(apl_pembelian.Tanggal_Beli)=12";
$sql66 = mysqli_query($conn,$query66);
while($data66 = mysqli_fetch_array($sql66)){
		$jumlah66 = $data66['jumlah'];
}

$besar12 = ($jumlah62 + $jumlah63 ) - ($jumlah64+$jumlah65+$jumlah66);
$desember= intval($besar12);

	
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Grafik</title>
</head>
<body>
<div  id="container" style="min-width: 100px; height: 500px; margin: 100px"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Besar (Rp)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Besar Ekuitas (Rp)',
        data:[<?php echo $januari;?>, <?php echo $februari;?>, <?php echo $maret;?>,  <?php echo $april;?>,  <?php echo $mei;?>,  <?php echo $juni;?>,  <?php echo $juli;?>,  <?php echo $agustus;?>,  <?php echo $september;?>,  <?php echo $oktober;?>,  <?php echo $november;?>,  <?php echo $desember;?>]
    
    }]
});

</script>

<script type="text/javascript">

function loading(){

var waktu = new Date();

var detik = waktu.getSeconds();


setTimeout( "loading()", 1000 );

}


</script>

<script>
function myFunction() {
    location.reload();
}
</script>

</body>
</html>