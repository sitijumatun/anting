<html>

<head>

<script type="text/javascript">

function burung(){

var waktu = new Date();

var detik = waktu.getSeconds();

document.getElementById( 'landak' ).style.width = detik;

setTimeout( "burung()", 500 );

}

</script>

</head>

<body onload="burung()">

<div id="landak" style="background-color : rgb( 255, 000, 000 )">.</div>

</body>

</html> 