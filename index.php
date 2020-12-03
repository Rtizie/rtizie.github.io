<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" type="text/css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Texturina:wght@200&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/ec9bc62d6e.js" crossorigin="anonymous"></script>

	<body>

		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="about.html">About</a>
		  <a href="#">Screenshots</a>
		  <a href="#">Buy</a>
		</div>
    	<nav>
    		<a href="index.html" style="color: white;text-decoration: none;font-family:'Great Vibes', cursive;">AF</a>
			<span id="counterVisitor"><?php include "counter.php"; ?></span>
			<span style="float: right;">
				<a href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars icon"></i></a>
			</span>
			<span style="float: right;">
				<a href="https://www.twitter.com/"><i class="fab fa-twitter icon"></i></a>
			</span>
			<span style="float: right;">
				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f icon"></i></a>
			</span>
    	</nav>

    	<main>
    		<div style="float: right;width: 30%;padding-right: 48px;margin-top:128px;">
    			<div style="font-size: 64px;">
    				<b style="margin-bottom: 0px;">Creators:</b> 
    				<p style="font-size: 28px;margin-top: 0px">Alexandr Merunka,Gabriel Želva</p>
    			</div>
    		</div>
    		<div style="margin-left:200px;padding-right: 10%;width: 30%;height: 95%;float: left;border-right: white 1px solid ">
    			<h2 style="font-size: 600%;margin-bottom: 0">After Life</h2>
    			<i><sup>Game Of Seven Deadly Sins</sup></i>
    		</div>		
    	</main>
    	<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>
		<script src="js/main.js"></script>
    </body>
</html>