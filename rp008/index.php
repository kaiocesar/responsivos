<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auto carregamento de busca</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	<style type="text/css">
		*{margin:0;padding:0;}
/*		#content{
			background: #000;
			float: left;
			width: 100%;
			position: fixed;
			height: 100%;
			top: 0;
			left: 0;
		}


		#MessageAlert{
			background: #FFF;
			width: 25%;
			padding: 0 0 20px 0;
			margin: 10% auto;
		}
		#MessageAlert h4{
			width: 100%;
			min-height: 20px;
			background: #CCC;
			float: left;
			font-size: 12px;
			text-indent: 2%;
			line-height: 19px;
		}
		#MessageAlert h4 span{
			float: right;
			margin-right: 9px;
			font-size: 14px;
		}
		#MessageAlert p{
			float: left;
			width: 100%;
			text-align: center;
			margin: 7% 0 5% 0;
		}
		#MessageAlert button{
			float: right;
			margin: 0 20px 0 0;
		}
*/
	</style>
</head>
<body>

	<form action="#" id="form">
		<fieldset>
			
			<label for="">Estados:  
				<select name="estados" id="estados">
					<option value="1">SP</option>
					<option value="2">ES</option>
					<option value="3">RJ</option>
				</select>
		 	</label>

			<label for="">Cidades: 
				<select name="cidade" id="cidade">
					<option value="0">---------</option>
				</select>
			</label>

		</fieldset>
	</form>
	
	<div id="content">
		<div id="MessageAlert">
			<h4>Atenção <span>X</span></h4>
			<p>Atenção a busca não encontrou nada.</p>
			<button>cancelar</button>
		</div>
	</div>

	<script type="text/javascript">
		$(function(){
			$("#form select").change(function(){
				var valor = $(this).serialize();
				var idselectnext = $(this).parent().parent().next(); //.next().attr('id');

				console.log(idselectnext);

				jQuery.ajax({
					type: "POST", 
					url: "change-select.php",
					data: valor,
					success: function (dados) {
						$("#content").html(dados);
					}
				});

			});
		});
	</script>

</body>
</html>