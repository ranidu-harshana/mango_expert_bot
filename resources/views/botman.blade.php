<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

	<style>
		html, body {
			background-color: #f9f9f9;
			background-image: none;
			font-family: 'Ubuntu', "Helvetica Neue", Arial, sans-serif;
			font-size: 14px;
			margin: 0;
			padding: 0;

		}
	</style>
</head>
<body>
	jhj
</body>

	<script>
		var d = new Date();
		var time = d.getHours();
		var greeting = '';
		if (time < "12") {
			greeting = "Morning!";
		} else if (time >= "12" && time < "17") {
			greeting = "Afternoon!";
		} else if (time >= "17" && time < "19") {
			greeting = "Evening!";
		} else if (time >= "19") {
			greeting = "Night!";
		}
		var botmanWidget = {
			aboutText: 'Write Something',
			introMessage: "✋ Hello! Good "+ greeting,
		};
  	</script>
  
  	<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
   
</html>