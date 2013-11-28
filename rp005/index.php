<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Páginação com Cycle Jquery</title>
	<style type="text/css">
		body{margin:0; padding:0; font-family: Arial, verdana, Trebuchet MS;}
		#ContentPage{margin: 0 auto; width:990px; position: relative;}
		.boxNoticia{float: left; width:220px; height: 220px; border:1px solid #ccc; margin: 0 20px 20px 0;text-align: center;}
	
		#verticalalign{text-align: center; float: left; width: 100%;}
		#WrapperNoticias{float: left; padding-bottom: 40px; width: 100%; position: relative;}

		.layerPagination{float:left; }
	
		#navPagination{position: absolute; bottom: 0; height: 20px;}
		#navPagination a{ text-decoration: none; color: #333; font-size: 20px; float: left; margin: 0 13px 0 0;}
		#navPagination .activeSlide{font-weight: normal; line-height: 24px; color: #FFF; background: #000; text-align: center; padding: 4px 10px 4px 10px; margin: -4px 9px 0 0; cursor:default; }
 </style>

	<script src="assets/js/jquery-1.10.1.min.js" type="text/javascript" ></script>
	<script src="assets/js/jquery.cycle.js" type="text/javascript" ></script>
	<script type="text/javascript">
		$('#CyclePagination').cycle({ 
		    fx:     'fade', 
		    speed:  'fast', 
		    timeout: 0, 
		    pager:  '#navPagination' 
		});
	</script>
</head>
<body>

	<div id="ContentPage">
		<h1>Paginação com Cycle Jquery</h1>
		<p style="float:left;">Escrito por Kaio Cesar <b>&lt;</b>programador.kaio@gmail.com<b>&gt;</b></p>
		<p style="float:right; margin-right:43px;">Correções e atualizações estão em <a href="bugfix.md">Bugfix</a> ou <a href="chagelog.md">Chagelog</a></p>
		
		<div id="WrapperNoticias">
			<?php
				$c=0;
				$totalItems = 32; // total de items que tenho
				$ItemsExibir = 8; // quantos items por página
//				$DebugQntoPaginasTerei = ceil($totalItems / $ItemsExibir);
				$count = 0;

				if ($totalItems): // se tivermos items, continua
					echo "<div id='verticalalign'>";
						echo "<div id='navPagination'></div>";
					echo "</div>";
					
					echo "<div id='CyclePagination'>";
					while($c<$totalItems): 
					 	if ($count==0) {
					 		echo "<div class='layerPagination'>";	
					 	}

						?>	
							<div class="boxNoticia">
								<br/>
								<span><b>Código: </b><?php echo $c; ?></span>
								<br/>
								<b>Descrição: </b>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamusem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus</p>
							</div>
						<?php 
						++$count;
						if ($count==$ItemsExibir) {
							echo "</div>";
							$count=0;
						}
						++$c;
					  endwhile; 					  	
					  echo "</div>";
				  endif;


			?>
		</div>

	</div>


</body>
</html>