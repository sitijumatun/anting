
<?php
	include "../apl_koneksi.php";

	$jumlah = array();
	$bulan = array();

	$query = "SELECT * FROM `apl_panen` ORDER BY Tanggal_Panen ASC LIMIT 10";
	$sql = mysqli_query($conn,$query);
	while($data = mysqli_fetch_array($sql)){
		$jumlah[] = intval($data['Berat_Panen']);
		$bulan[] = $data['Tanggal_Panen'];
	}
	
	
	//monitoring
	$suhu = array();
	$kelembaban = array();
	$waktu = array();

	$query2 = "SELECT * FROM `apl_sensor` ORDER BY Waktu ASC LIMIT 10";
	$sql2 = mysqli_query($conn,$query2);
	while($data2 = mysqli_fetch_array($sql2)){
		$suhu[] = intval($data2['Suhu']);
		$kelembaban[] = intval($data2['Kelembapan']);
		$waktu[]=$data2['Waktu'];
		
	}
	
	$query3 = "SELECT * FROM `apl_sensor` ORDER BY Waktu DESC LIMIT 1";
	$sql3 = mysqli_query($conn,$query3);
	while($data3 = mysqli_fetch_array($sql3)){
		$suhunow = intval($data3['Suhu']);
		$kelembabannow = intval($data3['Kelembapan']);
	
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Grafik</title>
</head>
<body onload="setTimeout(myFunction, 3000);">
<div id="container" style="min-width: 100px; height: 500px; margin: 100px"></div>

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
        categories:<?php print_r(json_encode($waktu));?>
    },
    yAxis: {
        title: {
            text: 'Suhu (°C)'
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
        name: 'Kelembapan (%)',
        data:<?php print_r(json_encode($kelembaban));?>
    }, {
        name: 'Suhu (°C)',
        data: <?php print_r(json_encode($suhu));?>
    }]
});

</script>
<script>
function myFunction() {
    location.reload();
}
</script>

</body>
</html>