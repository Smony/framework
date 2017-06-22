<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $seo['title']; ?></title>
	<meta name="keywords" content="<?= $seo['keywords']; ?>" />
	<meta name="description" content="<?= $seo['description']; ?>">
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type='text/javascript'>
	//<![CDATA[
		var startTime = new Date();
		function showElapsedTime() {
		var testSiteUrl = location.href;;
		var testSiteString = String(testSiteUrl).slice(testSiteUrl.indexOf("www"));
		var endTime = new Date();
		var elapsedTime = Number(endTime-startTime);
		var browser=navigator.userAgent;
		var platform=navigator.platform;
		// var msgString = "Время загрузки " + Number(elapsedTime/1000) + " секунд (" + elapsedTime + " ms)<br/><span>Браузер " + browser + "</span>";
		var msgString = "Время загрузки " + Number(elapsedTime/1000) + "</span>";
		document.getElementById("vremia").innerHTML = msgString;
		}
		onload=function() {showElapsedTime();}
		//]]>
	</script>
  </head>
  <body>
  
		<div class="container">
		  <div class="header clearfix">
			<h3 class="text-muted">Default</h3>
		  </div>

		  <div class="jumbotron">
			<h1>Default Template</h1>
			<p class="lead">This is a default template.</p>
			<code><div id="vremia">Загрузка ...</div></code>
		  </div>

		<?= $content; ?>

		</div> <!-- /container -->
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>



