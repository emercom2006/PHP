<html>

	<head>
		<meta charset="utf-8" />
		<title></title>
		
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="reveal.css">	
	  	
		<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="jquery.reveal.js"></script>
		
		<style type="text/css">
			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #0066ff; }
		</style>
		
	</head>
	<body>


 <?php

        $filesSmall = scandir("img_small");

        foreach($filesSmall as $filesmall){
            if ($filesmall == '.' || $filesmall== '..' || $filesmall == '.DS_Store'){
                continue;
            }



echo "		
			<a href=\"#\" class=\"big-link\" data-reveal-id=\"myModal\">
			<img alt ='Картинка' src=\"img_small/".$filesmall."\"><br>
		</a>	
		
		

    ";

 }
 




        $files = scandir("img_large");

        foreach($files as $file){
            if ($file == '.' || $file == '..' || $file == '.DS_Store'){
                continue;
            }



echo "



		<div id=\"myModal\" class=\"reveal-modal\">
            <img alt ='Картинка' src=\"img_large/".$file."\"><br>
			<a class=\"close-reveal-modal\">&#215;</a>
		</div>
            
    ";

 }

 ?>

	</body>
    </html>