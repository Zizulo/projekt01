<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>Dostępne auta - Sedan</title>
	<meta name="description" content="Wypożycz swój wymarzony model samochodu! - Sedan">
	<meta name="keywords" content="samochód, katalog, salon, wypożyczalnia aut, pancar sharing studio, sedan">
	<meta name="author" content="Cezary Figurski">
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script src="jquery.scrollTo.min.js"></script>
	
	<script>
		jQuery(function($)
		{
			//zresetuj scrolla
			$.scrollTo(0);
			$('#link1').click(function() {$.scrollTo($('#rodzajnadwozia'), 500);});
			$('.scrollup').click(function() {$.scrollTo($('body'), 1000);});
		}
		);
		
		//pokaz podczas przewijania
		
		$(window).scroll(function()
		{
			if($(this).scrollTop()>300) $('.scrollup').fadeIn();
			else $('.scrollup').fadeOut();
		}
		);
	</script>
	
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
		<h1>Dostępne marki aut - Sedan</h1>

	</header>
	
	<main>
	
		<article>
		
			<form action="" method="post">
			
			<div class="row">
			
				<fieldset>
				<legend>Ze względu na wielkość</legend>
					<div id="container" class="container">
					
						<a href="#" class="scrollup"></a>
						
						<div id="content" class="content">
								<h1><div id="logo"><label> 1. Autosegment B </label></div><h1>
								
									<h2><div >Chevrolet Aveo</div><img src="img/ChevroletAveo.jpg" alt="Chevrolet Aveo" /><h2>
									<h2><div >Citroën C-Elysée</div><img src="img/CitroënCElyséeIIfacelift.jpg" alt="CitroënCElysée.jpg" /><h2> 
									
								<h1><div id="logo"><label> 2. Autosegment C </label></div><h1>
								
									<h2><div>Fiat Tipo<div><img src="img/FiatTipo.jpg" alt="Fiat Tipo" /></h2>
									
								<h1><div id="logo"><label> 3. Autosegment D </label></div><h1>
								
									<h2><div>Renault Talisman</div><img src="img/RenaultTalisman.jpg" alt="Renault Talisman" /></h2>
									
								<h1><div id="logo"><label> 4. Autosegment E </label></div><h1>
								
									<h2><div>Audi A6</div><img src="img/AudiA6.jpg" alt="Audi A6" /><h2>
									<h2><div>Saab 9-5 NG</div><img src="img/Saab9-5NG.jpg" alt="Saab 9-5 NG" /><h2>
									
								<h1><div id="logo"><label> 5. Autosegment F </label></div><h1>
								
									<h2><div>JAGUAR XJ</div><img src="img/JAGUARXJ.jpg" alt="JAGUAR XJ" /></h2>
									
						</div>
							
					</div>
				</fieldset>
			
			</div>
			
			
			
			</form>		
			
		</article>
		
	</main>

</body>
</html>