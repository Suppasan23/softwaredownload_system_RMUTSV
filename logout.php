<?php
session_start();
session_destroy();


header("refresh: 2; url=/Other_system/softwaredownload_system");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<style>
	body {
		cursor: wait;
		text-align: center;
	}
	h3.orange {
		color: #ff6600;
	}

	
</style>
	
<title>Logout</title>
</head>

<body>
	<h3 class="orange">ท่านได้ออกจากระบบแล้ว จะกลับสู่หน้าหลักใน 2 วินาที</h3>
</body>
</html>