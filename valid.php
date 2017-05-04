<html>
	<head>
		<link rel="stylesheet" type="text/css" href="WMstyles.css">
		<title>WM Device Creator</title>
	</head>
<body>

<div id="validate">
Device will be generated with the following information - is this correct?
<p>

Device name: <?php echo $_POST["device"]; ?><br>
MAC address: <?php echo $_POST["mac"]; ?><br>
Asset tag: <?php echo $_POST["asset"]; ?><br>
Store type: <?php echo $_POST["store_type"]; ?>

</div>

</body>
</html>
