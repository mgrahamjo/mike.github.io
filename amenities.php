<?php

if (time() % 2 == 0) {
	$src = 'http://verifyapp.com/u/72487?preview=true';
} else {
	$src = 'http://verifyapp.com/u/72488?preview=true';
}

?>

<!doctype html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title>Hotel Amenities test</title>
  </head>
  <body>
  	<style type="text/css">
	  	div {
	  		position: absolute;
	  		top: 0;
	  		left: 0;
	  		height: 100px;
	  		box-sizing: border-box;
	  		padding: 20px;
	  		font-family: 'Helvetica', 'Arial', 'sans';
	  	}
	  	a {
	  		float: right;
	  	}
	</style>
  <div>
  	Complete the tasks below, then press done to continue.
  	<a href="https://www.surveymonkey.com/r/Z9YH6XS">Done</a>
  </div>
	<iframe src="<?=$src?>" style="width:100%;position:absolute;left:0;top:100px;bottom:0;height:calc(100%-100px);" frameborder="0">
	</iframe>
  </body>
</html>
