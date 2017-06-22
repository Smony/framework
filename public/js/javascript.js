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
	

