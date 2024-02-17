<?php 
session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
	 <style type = "text/css">

        body{
    	font-family:Arial, Helvetica, sans-serif;
        font: 18px tahoma;
        }

        label{
        font-weight:normal;
        width:100px;
        font: 18px tahoma;
        }

        input{
		width: 200px;
		height: 20px;
		resize: none;
		overflow: auto;
		background: #ffffff;
		border: solid 1px gray;
		margin: 3px;
		padding: 3px;
		border-radius: 2px;	
		font: 18px tahoma;
		}

		button {
		background: steelblue;
		color: #f0f0f5;
		border:solid 1px #000000;
		border-radius: 3px;
		padding: 3px 20px;
		margin-left: 10px;
		font: 18px tahoma;
		}

		h3.green{
		color: #060;
		}
      </style>

</head>

<body>

	

<?php
	
if($_POST) {

	$username = $_POST['input_user'];
	$password = $_POST['input_pswd'];

	$usertype = strpos($username,"."); //หาว่าเป็นอาจารย์หรือนักศึกษา
							
 
									if(!empty($usertype))	// เป็นอาจารย์
										{

																		$loginUrl = 'http://elogin.rmutsv.ac.th';
																			
																		$ch = curl_init();
																		curl_setopt($ch, CURLOPT_URL, $loginUrl);
																		curl_setopt($ch, CURLOPT_POST, 1);
																		curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$username.'&password='.$password);
																		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
																		$store = curl_exec($ch);   //เอาชื่อและนามสกุลของผูล็อคอินมาเก็บไว้ในตัวแปร$store
																		if( $store != 'none')
																		{
																			//echo "Successfully login <br />"
																			$_SESSION['name'] = $store;


																		}
																		else
																		{
																			$err  = '<span>ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง</span>';
																		}


										}
									else	// เป็นนักศึกษา
										{

										$yearnow = date("Y") + 543;  // ได้ปี พ.ศ ปัจจุบันมา
										$studentyear = 25 . substr($username, 2 ,2);  //ได้ปี พ.ศ ของนักศึกษา เช่น ถ้าใส่ s154404150015 ก็จะได้ 2554
										$studentage = $yearnow - $studentyear; //ได้อายุการเป็นนักศึกษา(ปี)



																		if($studentage <= 5 )
																		{

																			$loginUrl = 'http://elogin.rmutsv.ac.th';
																			
																			$ch = curl_init();
																			curl_setopt($ch, CURLOPT_URL, $loginUrl);
																			curl_setopt($ch, CURLOPT_POST, 1);
																			curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$username.'&password='.$password);
																			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
																			$store = curl_exec($ch);	 //เอาชื่อและนามสกุลของผูล็อคอินมาเก็บไว้ในตัวแปร$store
																			if( $store != 'none')
																			{
																				//echo "Successfully login <br />"
																				$_SESSION['name'] = $store;

																			}
																			else
																			{
																				$err  = '<span>ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง</span>';
																			}

																								
																		}
																	else
																		{

																			$err  = '<span>Access Denied</span>';

																		}

										}

							
}
?>


<?php 
	 if(!isset($_SESSION['name'])) {  
?>


<div align = "center">
   <div style = "width:390px; border: solid 1px #000000; background: #f2f2f2; border-radius: 4px; " align = "Right">
       <div style = "background-color:#000000; color:#FFFFFF; padding:5px;" align = "Left"><b>เข้าสู่ระบบ</b></div>
	   <div align = "center" style = "margin:6px"><label>กรุณาลงชื่อเข้าใช้ด้วยรหัส e-passport ของท่าน</label></div>
           <div style = "margin:28px">
			   
	
	<form method="post">
		

  		<label>UserName :</label>  <input type="text" name="input_user" required><br>
    	<label>Password :</label>  <input type="password" name="input_pswd" required><br><br>
    	<button >Login</button>
		<label>&nbsp;</label>
			
		<?php 
		 echo "<a href='/Other_system/softwaredownload_system'>Back</a>";
		?>
		
    </form> 
            
			  <div style = "font-size:15px; color:#cc0000; margin-top:10px"><?php echo $err; ?></div>		
       </div>		
    </div>		
</div>
	
<?php  
 	} else {
?>
	<div align="center"><h3 class="green" >ท่านได้เข้าสู่ระบบแล้ว จะกลับสู่หน้าหลักใน 2 วินาที</h3><div>
    	<?php echo $_SESSION['name']; ?><br>
		<?php echo $studentage ; ?><br>
		<?php 
			header("refresh: 2; url=/Other_system/softwaredownload_system")
		?>
		
<?php
	}
?>
	

	
	
</body>
</html>