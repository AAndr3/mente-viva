<?php 
session_start();
include('includes/config.php');
include('includes/servidor.php');

if(!isset($_SESSION['id_utilizador'])) {
	header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Mente Viva - Vender</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vender.css">
  <script src="assets/js/vender.js"></script>
  <!--Bootstrap-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


</head>
<body>

<!--HEADER-->
<?php include('includes/header.php');?>
<!--/HEADER-->

<!--VENDER-->

<br><br>
<div class="vender_div">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Carro')" id="defaultOpen"><i class="fas fa-car"></i></button>
  <button class="tablinks" onclick="openCity(event, 'Imagens')"><i class="far fa-images"></i></button>
  <button class="tablinks" onclick="openCity(event, 'Pessoal')"><i class="fas fa-id-badge"></i></button>
</div>




<div id="Carro" class="tabcontent">
  <h1 style="text-align: center;font-size: 2.5rem">Dados da viatura</h1>
  <br>
	 <div class="tab_content_select">
	  <label>Marca*</label><br>
	  <select id="marca" name="marca" class="selectvender actionmarca">
	  	<option value="0" selected disabled hidden>Marca</option> 
	  	<?php echo get_marca();?>
	  </select>
	</div>
	 <div class="tab_content_select">
	  <label>Modelo*</label><br>
	  <select id="modelo" name="modelo" class="selectvender">
	  	<option value="" selected disabled hidden>Modelo</option>
	  </select>
	</div>
	<div class="tab_content_select">
	  <label>Ano*</label><br>
	  <select id="ano" name="ano" class="selectvender">
	  	<option value="" selected disabled hidden>Ano</option>
	  	<?php echo get_ano();?>
	  </select>
	</div>
	<div class="tab_content_select">
	  <label>Preço*</label><br>
 		<input type="text" name="preco" id="preco" placeholder="Preço*" class="input_vender">
	</div>
	
	<br><br><br>

	<div class="tab_content_select">
	  <label>Km*</label><br>
 		<input type="text" name="km" id="km" placeholder="Quilómetros*" class="input_vender">
	</div>
	<div class="tab_content_select">
	  <label>Potência*</label><br>
 		<input type="text" name="potencia" id="potencia" placeholder="Potência*" class="input_vender">
	</div>
	<div class="tab_content_select">
	  <label>Cilindrada*</label><br>
 		<input type="text" name="cilindrada" id="cilindrada" placeholder="Cilindrada*" class="input_vender">
	</div>
	<div class="tab_content_select">
	  <label>Cor*</label><br>
	  <select id="cor" name="cor" class="selectvender">
	  	<option value="" selected disabled hidden>Cor</option>
	  	<?php echo get_cor();?>
	  </select>
	</div>

	<br><br><br>

	<div class="tab_content_select">
	  <label>Mês*</label><br>
	  <select id="mes" name="mes" class="selectvender">
	  	<option value="" selected disabled hidden>Mês</option>
	  	<?php echo get_mes();?>
	  </select>
	</div>
	<div class="tab_content_select">
	  <label>Combustível*</label><br>
	  <select id="combustivel" name="combustivel" class="selectvender">
	  	<option value="" selected disabled hidden>Combustível</option>
	  	<?php echo get_combustivel();?>
	  </select>
	</div>
	<div class="tab_content_select">
	  <label>Tipo de caixa*</label><br>
	  <select id="caixa" name="caixa" class="selectvender">
	  	<option value="" selected disabled hidden>Tipo de caixa</option>
	  	<?php echo get_caixa();?>
	  </select>
	</div>

	<br><br>
</div>

<div id="Imagens" class="tabcontent">
   <h1 style="text-align: center;font-size: 2.5rem">Imagens da viatura</h1>
 	
   <label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img1_img" src="assets/images/add.png">
  		<input type="file" id="img1" style="display: none"><button class="remove_button" id="remove_img1">X</button>
   </label>

    <label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img2_img" src="assets/images/add.png">
  		<input type="file" id="img2" style="display: none"><button class="remove_button" id="remove_img2">X</button>
   </label>

    <label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img3_img" src="assets/images/add.png">
  		<input type="file" id="img3" style="display: none"><button class="remove_button" id="remove_img3">X</button>
   </label>
   <label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img4_img" src="assets/images/add.png">
  		<input type="file" id="img4" style="display: none"><button class="remove_button" id="remove_img4">X</button>
   </label>	

   <br><br>

   	<label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img5_img" src="assets/images/add.png">
  		<input type="file" id="img5" style="display: none"><button class="remove_button" id="remove_img5">X</button>
   	</label>
   	<label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img6_img" src="assets/images/add.png">
  		<input type="file" id="img6" style="display: none"><button class="remove_button" id="remove_img6">X</button>
   	</label>
   	<label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img7_img" src="assets/images/add.png">
  		<input type="file" id="img7" style="display: none"><button class="remove_button" id="remove_img7">X</button>
   	</label>
   	<label style="position: relative;margin-right: 2rem;">
   		<img class="imgupload" id="img8_img" src="assets/images/add.png">
  		<input type="file" id="img8" style="display: none"><button class="remove_button" id="remove_img8">X</button>
   	</label>	

</div>

<div id="Pessoal" class="tabcontent">
  <h1 style="text-align: center;font-size: 2.5rem">Dados do vendedor</h1>
  <br>
 	<div class="tab_content_person">
 		<input type="text" name="primeiro_nome" id="primeiro_nome" placeholder="Primeiro nome*" class="input_vender">
 	</div>
 	<div class="tab_content_person">
 		<input type="text" name="ultimo_nome" id="ultimo_nome" placeholder="Ultimo nome*" class="input_vender">
 	</div>
 	<div class="tab_content_person">
 		<input type="text" name="telemovel" id="telemovel" placeholder="Telemóvel*" class="input_vender">
 	</div>
 	<div class="tab_content_person">
 		<input type="text" name="email" id="email" placeholder="Email*" class="input_vender">
 	</div> 

 	<br><br><br>

 	<div class="tab_content_person">
 		<select id="distrito" name="distrito" class="select_vender action">
 			<option value="0" selected disabled hidden>Distrito</option> 
 			<?php echo get_distrito();?>
 		</select>
 	</div>
 	<div class="tab_content_person">
 		<select id="concelho" name="concelho" class="select_vender action">
 			<option value="0" selected disabled hidden>Concelho</option> 
 		</select>
 	</div>
 	<div class="tab_content_person">
 		<select id="freguesia" name="freguesia" class="select_vender">
 			<option value="0" selected disabled hidden>Freguesia</option> 
 		</select>
 	</div>
  <br><br>
</div>
<button class="botao_vender" onclick="verificar();">Introduzir</button>
<p id="verifica"></p>
<p id="verificas"></p>
</div>

<!--/vender-->


<script>


		document.getElementById("img1").addEventListener("change", function() { mudar("img1", "img1_img", "remove_img1"); })
		document.getElementById("img2").addEventListener("change", function() { mudar("img2", "img2_img", "remove_img2"); })
		document.getElementById("img3").addEventListener("change", function() { mudar("img3", "img3_img", "remove_img3"); })
		document.getElementById("img4").addEventListener("change", function() { mudar("img4", "img4_img", "remove_img4"); })
		document.getElementById("img5").addEventListener("change", function() { mudar("img5", "img5_img", "remove_img5"); })
		document.getElementById("img6").addEventListener("change", function() { mudar("img6", "img6_img", "remove_img6"); })
		document.getElementById("img7").addEventListener("change", function() { mudar("img7", "img7_img", "remove_img7"); })
		document.getElementById("img8").addEventListener("change", function() { mudar("img8", "img8_img", "remove_img8"); })

		document.getElementById("remove_img1").addEventListener("click", function() { apagar("img1", "img1_img", "remove_img1"); })
		document.getElementById("remove_img2").addEventListener("click", function() { apagar("img2", "img2_img", "remove_img2"); })
		document.getElementById("remove_img3").addEventListener("click", function() { apagar("img3", "img3_img", "remove_img3"); })
		document.getElementById("remove_img4").addEventListener("click", function() { apagar("img4", "img4_img", "remove_img4"); })
		document.getElementById("remove_img5").addEventListener("click", function() { apagar("img5", "img5_img", "remove_img5"); })
		document.getElementById("remove_img6").addEventListener("click", function() { apagar("img6", "img6_img", "remove_img6"); })
		document.getElementById("remove_img7").addEventListener("click", function() { apagar("img7", "img7_img", "remove_img7"); })
		document.getElementById("remove_img8").addEventListener("click", function() { apagar("img8", "img8_img", "remove_img8"); })

		
		function mudar(input_id, img_id, botao_id) {
			var tipos = ["jpg", "png", "jpeg", "gif"];
			var input = document.getElementById(input_id).files[0];
			var img = document.getElementById(img_id);
			var botao = document.getElementById(botao_id);

			var imagem_nome = input.name;
			var extensao = imagem_nome.split('.').pop().toLowerCase();
			
			for(i=0;i<4;i++) {
				if(extensao == tipos[i]) {
					tipo = "1";
				}
			}

			if(tipo == "1") {
				var reader = new FileReader();
				reader.onload = function (e) {
					img.src = e.target.result;
				}
				reader.readAsDataURL(input);

				botao.style.display = "block";
			}
		}

		function apagar(input_id, img_id, botao_id) {
			$("#"+input_id).val("");
			document.getElementById(img_id).src="assets/images/add.png";
			document.getElementById(botao_id).style.display = "none";
		}



var selects_id = ["marca", "modelo", "ano", "cor", "mes", "combustivel", "caixa", "distrito", "concelho", "freguesia"];
var inputs_id = ["preco", "km", "potencia", "cilindrada", "primeiro_nome", "ultimo_nome", "telemovel", "email"];


function verificar() {
	cont = 0;
	for(i=0;i<10;i++) {
		var select = document.getElementById(selects_id[i]);
		if(select.selectedIndex == 0) {
			select.style.border= "2px solid red";
		} else {
			select.style.border = "1px solid grey";
			cont = cont + 1;
		}
	}
	
	for (i=0;i<8;i++) {
		var input = document.getElementById(inputs_id[i]);
		if(input.value == "") {
			input.style.border = "2px solid red";
		}else {
			input.style.border = "1px solid grey";
			cont = cont + 1;
		}
	}

	if(cont == 18) {
		contagem = 0;
		/* PRECO */
		var preco = document.getElementById("preco");
		if(isNaN(preco.value)) {
			preco.style.border = "2px solid red";
		}else {
			preco.style.border = "1px solid grey";
			preco_size = preco.value.length;
			if(preco_size < 2 || preco_size > 7) {
				preco.style.border = "2px solid red";
			}else {
				preco.style.border="1px solid grey";
				contagem = contagem + 1;
			}
		}
		/* /PRECO */

		/* KM */
		var km = document.getElementById("km");
		if(isNaN(km.value)) {
			km.style.border = "2px solid red";
		}else {
			km.style.border = "1px solid grey";
			km_size = km.value.length;
			if(km_size < 1 || km_size > 7) {
				km.style.border = "2px solid red";
			}else {
				km.style.border = "1px solid grey";
				contagem = contagem + 1;
			}
		}
		/* /KM */

		/* POTENCIA */
		var potencia = document.getElementById("potencia");
		if(isNaN(potencia.value)) {
			potencia.style.border = "2px solid red";
		}else {
			potencia.style.border = "1px solid grey";
			potencia_size = potencia.value.length;
			if(potencia_size < 2 || potencia_size > 4) {
				potencia.style.border = "2px solid red";
			}else {
				potencia.style,border = "1px solid grey";
				contagem = contagem + 1;
			}
		}
		/* /POTENCIA */

		/* CILINDRADA */
		var cilindrada = document.getElementById("cilindrada");
		if(isNaN(cilindrada.value)) {
			cilindrada.style.border = "2px solid red";
		}else {
			cilindrada.style.border = "1px solid grey";
			cilindrada_size = cilindrada.value.length;
			if(cilindrada_size < 3 || cilindrada_size > 4) {
				cilindrada.style.border = "2px solid red";
			}else {
				cilindrada.style.border = "1px solid grey";
				contagem = contagem + 1;
			}
		}
		/* /CILINDRADA */

		/* PRIMEIRO NOME*/
		var primeiro_nome = document.getElementById("primeiro_nome");
		primeiro_nome_size = primeiro_nome.value.length;
		if(primeiro_nome_size < 3 || primeiro_nome_size > 15) {
			primeiro_nome.style.border = "2px solid red";
		}else {
			primeiro_nome.style.border = "1px solid grey";
			contagem = contagem + 1;
		}
		/* /PRIMEIRO NOME */

		/* ULTIMO NOME */
		var ultimo_nome = document.getElementById("ultimo_nome");
		ultimo_nome_size = ultimo_nome.value.length;	
		if(ultimo_nome_size < 3 || ultimo_nome_size > 15) {
			ultimo_nome.style.border = "2px solid red";
		}else {
			ultimo_nome.style.border = "1px solid grey";
			contagem = contagem + 1;
		}
		/* /ULTIMO NOME */

		/* TELEMOVEL */
		var telemovel = document.getElementById("telemovel");
		if(isNaN(telemovel.value)) {
			telemovel.style.border = "2px solid red";
		}else {
			telemovel.style.border = "1px solid grey";
			telemovel_size = telemovel.value.length;
			if(telemovel_size != 9) {
				telemovel.style.border = "2px solid red";
			}else {
				telemovel.style.border = "1px solid grey";
				contagem = contagem + 1;
			}
		}
		/* /TELEMOVEL */

		/* EMAIL */
		var email = document.getElementById("email");
		if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))	{
			email.style.border = "2px solid red";
		}else {
			email.style.border = "1px solid grey";
			contagem = contagem + 1;
		}

		/*IMAGENS*/
		var imagemprincipal = document.getElementById("img1").files[0];
		if(imagemprincipal != null) {
			contagem = contagem + 1;
		}else {
			alert("Inisra a imagem principal");
		}

		if(contagem == 9) {
			var marca = document.getElementById("marca").value;
			var modelo = document.getElementById("modelo").value;
			var ano = document.getElementById("ano").value;
			var preco = document.getElementById("preco").value;
			var km = document.getElementById("km").value;
			var potencia = document.getElementById("potencia").value;
			var cilindrada = document.getElementById("cilindrada").value;
			var cor = document.getElementById("cor").value;
			var mes = document.getElementById("mes").value;
			var combustivel = document.getElementById("combustivel").value;
			var caixa = document.getElementById("caixa").value;
			var primeiro_nome = document.getElementById("primeiro_nome").value;
			var ultimo_nome = document.getElementById("ultimo_nome").value;
			var telemovel = document.getElementById("telemovel").value;
			var email = document.getElementById("email").value;
			var distrito = document.getElementById("distrito").value;
			var concelho = document.getElementById("concelho").value;
			var freguesia = document.getElementById("freguesia").value;
			$.ajax({
				type:"post", 
				url:"includes/vender_veiculo.php",
				data:{marca, modelo, ano, preco, km, potencia, cilindrada, cor, mes, combustivel, caixa, primeiro_nome, ultimo_nome, telemovel, email, distrito, concelho, freguesia},
				success:function(data) {
					$('#verifica').html(data);
				}
			});

			var imagensarray = [];
			var formData = new FormData();
			var x = 0;

			for(i=0;i<8;i++) {
				x = x + 1;
				imagensarray[i] = document.getElementById("img"+x).files[0];
				if(imagensarray[i] != null) {
					formData.append("img"+x, imagensarray[i]);
				}
			}
			$.ajax({
				type:"post",
				url:"includes/uploadimagens.php",
				data:formData,
				contentType:false,
				cache:false,
				processData:false,
				success:function(data) {
					$('#verificas').html(data);
				}
			});

		}		

	}
}









$(document).ready(function(){
  	$('.action').change(function(){
	    if($(this).val() != '')
	    {
	      var action = $(this).attr("id");
	      var query = $(this).val();  
	      var result = '';
	      if(action == "distrito")
	      {
	        result = 'concelho';
	        document.getElementById("freguesia").innerHTML = "<option selected disabled hidden>Freguesia</option>";
	      }else if(action == "concelho"){
	      	result = 'freguesia';
	      }	
	      $.ajax({
	        url:"includes/show_localização.php",
	        method:"POST",
	        data:{action:action, query:query},
	        success:function(data){
	          $("#"+result).html(data);
	        }
	      })
	    }
  	});
});


	$(document).ready(function(){
  $('.actionmarca').change(function(){
    if($(this).val() != '')
    {
      var action = $(this).attr("id");
      var query = $(this).val();  
      var result = '';
      if(action == "marca")
      {
        result = 'modelo';
      }
      $.ajax({
        url:"includes/show_modelo.php",
        method:"POST",
        data:{action:action, query:query},
        success:function(data){
          $("#"+result).html(data);
        }
      })
    }
  });
});

	document.getElementById("defaultOpen").click();
</script>


<!--FOOTER-->
<?php include('includes/footer.php'); ?>
<!--/FOOTER-->


