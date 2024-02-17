<?php 
session_start(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow" /> <!-- Hide clawing from search engine  -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">


    <style>

div.status
        {
            background-color: #800000;
            width:1100px;
            margin: auto;
            text-align: right;
            color: white;
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
         /*   border-top-left-radius: 3px;*/
         /*   border-top-right-radius: 3px;*/

        }


        div.first
        {
            background-color: #800000;
            width:1100px;
            margin: auto;
            text-align: center;
            color: white;
            padding-top: 8px;
            padding-bottom: 26px;
            border-left: 1px solid black;
            border-right: 1px solid black;
            border-top: 1px solid black;
          /*  border-top-left-radius: 3px;*/
          /*  border-top-right-radius: 3px;*/
        }

        div.seccond 
        {
            background-color: #f2f2f2;
            width: 1100px;
            margin: auto;
            border-left: 1px solid black;
            border-right: 1px solid black;
            border: 1px solid black;
            padding-bottom: 1%;
            padding-top: 1%;
        }

        div.third 
        {
            background-color: #e6e6e6;
            width: 1100px;
            margin: auto;
            text-align: left;
            color: black;
            padding: 5px;
           border-left: 1px solid black;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
           /* border-bottom-left-radius: 3px;*/
          /*  border-bottom-right-radius: 3px;*/
        }

        green
        {
	        color:#00802b;
	    }

        black
        {
	        color:#000000;
	    }

        white
        {
            color:#f2f2f2;
        }

        bold
        {
            font-weight: bold;
        }

        


		a.blue
	{
		color:#f2f2f2;
	}

        a.green
    {
        color:#006600;
    }

        a.yellow
	{
		color:#ffff99;
	}

        a.orange
	{
		color:#ff3300;
	}

		a.lightgreen
	{
		color:#00ff00;
	}

        table, td, th
    { 
        text-align: center;
        margin: auto;
        vertical-align: bottom;
    }
       



    </style>

<body>


<p></p>





<div class="first">
<p></p>
<?php 
if(!isset($_SESSION['name']))  /*ไม่ได้ล็อคอิน*/
{
     echo "<a class='blue' href='/Other_system/softwaredownload_system'><u>Home</u></a> | 
     <a class='blue' href='/Other_system/softwaredownload_system/login.php'><u>เข้าสู่ระบบ</u></a>&nbsp;";
}
else/*ล็อคอินแล้ว*/
{


    echo "<a class='blue' href='/Other_system/softwaredownload_system'><u>Home</u></a> | 
    <a class='lightgreen' >".$_SESSION['name']."</a>&nbsp<a class='blue'  href='/Other_system/softwaredownload_system/logout.php'><u>Logout</u></a>&nbsp;";

}
?>

</div>







<div class="seccond">
    <?php 

if(!isset($_SESSION['name'])) /*ไม่ได้ล็อคอิน*/
{

    


    echo "<p style='text-align:center ;  font-size: 40px'>𓃥𓃠𓃰𓃱𓃯𓃭𓃸𓃵𓃗𓃘𓃙𓃟𓄀𓄁𓄂𓄃𓆇𓆈𓆉𓆌𓆏𓆗𓆘𓆙𓆚𓆐𓆑𓆒𓆓𓆔𓆕𓆖</p>";
    echo "<p style='text-align:center ;  font-size: 40px'>𓆣𓆤𓆥𓆦𓆧𓆨𓆛𓆜𓆝𓆞𓆟𓆠𓆡𓆢𓄿𓅀𓅁𓅂𓅃𓅄𓅅𓅆𓅇𓅈𓅉𓅊𓅋𓅌𓅍𓅎</p>";


}


else /*ล็อคอินแล้ว*/
{ 
    
                    
                        echo " <table class='table table-bordered' style='width:99%'> ";

                echo " <thead> ";
                        echo " <tr> ";
                            echo " <th style='width:5%'>ที่</th> ";
                            echo " <th style='width:45%'>โปรแกรม</th> ";
                            echo " <th style='width:25%'><i class='far fa-file-archive'></i> ไฟล์ตัวติดตั้ง</th> ";
                            echo " <th style='width:25%'><i class='far fa-file-video'></i> ไฟล์วิดีโอคู่มือการติดตั้ง</th>";
                        echo " </tr> ";
                    echo " </thead> ";
                
                
                    echo " <tbody> ";


                        echo " <tr> ";
                            echo " <td><a>1</a></td> ";
                            echo " <td><black>Solidwork 2020</black></td> ";
                            echo " <td><a href='https://rmutsvacth-my.sharepoint.com/:u:/g/personal/suppasan_c_ms_rmutsv_ac_th/EV8-xqBjBZJEvEtUirGOd10BGZ0zccC60YW3AB5vGv8dMg?e=JOO2Sf' target='_blank' ><bold>Download</bold></a></td> ";
                            echo " <td><a href='https://drive.google.com/file/d/19DYAmb6URUSppc-CkBZp57Cv0kINCZd2/view?usp=sharing' target='_blank' ><bold>Video</bold></a></td> ";
                        echo " </tr> ";


                        echo " <tr> ";
                            echo " <td><a>2</a></td> ";
                            echo " <td><black>Solidwork 2016</black></td> ";
                            echo " <td><a href='https://rmutsvacth-my.sharepoint.com/:u:/g/personal/suppasan_c_ms_rmutsv_ac_th/EVskB2VHaWBIifzl8aOQVZIBJD6Egkd56bbTxHaJLxU1wg?e=pk7gXu' target='_blank' ><bold>Download</bold></a></td> ";
                            echo " <td><a href='https://drive.google.com/file/d/1nZtL1tnMn6iMZbuKk6QIdwK6-CF3AvAs/view?usp=sharing' target='_blank' ><bold>Video</bold></a></td> ";
                        echo " </tr> ";


                
                        echo " <tr> ";
                            echo " <td><a>3</a></td> ";
                            echo " <td><black>Autocad 2016</black></td> ";
                            echo " <td><a href='https://rmutsvacth-my.sharepoint.com/:u:/g/personal/suppasan_c_ms_rmutsv_ac_th/EfGHO7sYV_hLrojc_rzALlgBOVyyfN-h9Q9jV9Pn_--MUg?e=lr6Pa3' target='_blank' ><bold>Download</bold></a></td> ";
                            echo " <td><a href='https://drive.google.com/file/d/1UrqZHTk0vW8iMyRpbMi4RzSmXFyzUcA0/view?usp=sharing' target='_blank' ><bold>Video</bold></a></td> ";
                        echo " </tr> ";


                        echo " <tr> ";
                            echo " <td><a>4</a></td> ";
                            echo " <td><black>SketUp Pro 2020</black></td> ";
                            echo " <td><a href='https://rmutsvacth-my.sharepoint.com/:u:/g/personal/suppasan_c_ms_rmutsv_ac_th/EfPfDBwmFG9MsDMe9Q2v8_IBtQsmQiofnyHqtDH15wB1Eg?e=95Jl6o' target='_blank' ><bold>Download</bold></a></td> ";
                            echo " <td><a href='https://drive.google.com/file/d/1oB_39ml839wawLHmK6EvoxY17Lnp72iE/view?usp=sharing' target='_blank' ><bold>Video</bold></a></td> ";
                        echo " </tr> ";
                
                
                        echo " <tr> ";
                            echo " <td><a>5</a></td> ";
                            echo " <td><black>Siemen NX 11</black></td> ";
                            echo " <td><a href='https://rmutsvacth-my.sharepoint.com/:u:/g/personal/suppasan_c_ms_rmutsv_ac_th/ETgP7bYYc8FJjiZ8q3iAnjoB6B9Odyn_CZodCHBpcNP1IQ?e=aHmjWy' target='_blank' ><bold>Download</bold></a></td> ";
                            echo " <td><a href='https://drive.google.com/file/d/1yvbIpbet3G0lW6BYld-pZBRdvSC5gpR9/view?usp=sharing' target='_blank' ><bold>Video</bold></a></td> ";
                        echo " </tr> ";


                        echo " <tr> ";
                            echo " <td><a>6</a></td> ";
                            echo " <td><black>Siemen TIA 15</black></td> ";
                            echo " <td><a href='https://rmutsvacth-my.sharepoint.com/:u:/g/personal/suppasan_c_ms_rmutsv_ac_th/Ec3UzOwocSFMviql7VR3Ts4Blcdvtujt4yB4mLENdXjYmg?e=x87V1q' target='_blank' ><bold>Download</bold></a></td> ";
                            echo " <td><a href='https://drive.google.com/file/d/1qXKKRA0HH60Q9CSAoWER5W0SBQBEmBcU/view?usp=sharing' target='_blank' ><bold>Video</bold></a></td> ";
                        echo " </tr> ";



                    echo " </tbody> ";
                echo "</table>";
                    
                
                echo "<p style='text-align:center'><bold>รหัสดาวน์โหลดไฟล์&nbsp;:&nbsp;</bold><font color=green>       BrZaAxYxB3zyegLcqS48c7gFRaawr3UeGZ6NkDS2aq6te9av2f        </font><br></p>";// รหัสดาวน์โหลดไฟล์
                echo "<p style='text-align:center ;  font-size: 40px'>𓃥𓃠𓃰𓃱𓃯𓃭𓃸𓃵𓃗𓃘𓃙𓃟𓄀𓄁𓄂𓄃𓆇𓆈𓆉𓆌𓆏𓆗𓆘𓆙𓆚𓆐𓆑𓆒𓆓𓆔𓆕𓆖</p>";
                echo "<p style='text-align:center ;  font-size: 40px'>𓆣𓆤𓆥𓆦𓆧𓆨𓆛𓆜𓆝𓆞𓆟𓆠𓆡𓆢𓄿𓅀𓅁𓅂𓅃𓅄𓅅𓅆𓅇𓅈𓅉𓅊𓅋𓅌𓅍𓅎</p>";
}
    ?>
</div>






<div class="third ">
<?php 

if(!isset($_SESSION['name'])) /*ไม่ได้ล็อคอิน*/
{
    echo "<font color=red>&nbsp;*หมายเหตุ</font><br>";
    echo "&nbsp;1.ให้ล็อคอินด้วยรหัส E-Passport<br>";
}



else /*ล็อคอินแล้ว*/
{ 

    echo "&nbsp;<font color=red>&nbsp;*หมายเหตุ</font><br>";
    echo "&nbsp;1.ให้ล็อคอินด้วยรหัส E-Passport<br>";
    echo "&nbsp;2.ใช้สำหรับการเรียนการสอนเท่านั้น<br>";
    echo "&nbsp;3.หากไม่สามารถเล่นวิดีโอบนเบราว์เซอร์ได้ ให้ดาวน์โหลดวิดีโอมาเปิดบนเครื่อง";


}


?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })

    </script>

<br>

  </body>
</html>