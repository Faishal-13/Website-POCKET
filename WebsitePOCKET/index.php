<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$("#ceklabel").load('ceklabel.php');
				$("#cekprediksi").load('cekprediksi.php');
		
			}, 1000) ;
		});

	</script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Web POCKET</title>
  </head>
  <body style="background-color: #E8DA8C;">
  	<div class="container" style="margin-top: 150px; text-align: center;">
    	<h2>Sistem Pendeteksi Kematangan Buah Kelapa Sawit<br>Pada Produk POCKET</h2>	

    	<div style="display: flex; justify-content: center; padding-top: 10px">
    	<!-- label -->
	    <div class="card text-center" style="width: 50%">
		  <div class="card-header" style="color:white;font-size: 30px; font-weight: bold; background-color: #38761d;">
		    Label
		  </div>
		  <div class="card-body">
		    <h1 class="card-title"><span id="ceklabel">0</span></h1>
		  </div>
		</div>

		<!-- prediksi -->
		<div class="card text-center" style="width: 50%">
		  <div class="card-header" style="color:white; font-size: 30px; font-weight: bold; background-color: #DF6D2F;">
		    Prediksi
		  </div>
		  <div class="card-body">
		    <h1 class="card-title"><span id="cekprediksi">0</span></h1>
		  </div>
		</div>  

		
		</div>

  	</div>

  	<div class="container" style="padding-top: 20px; text-align: center">
  		<img src="images/logokecilbangetT.png">
  	</div>


    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
