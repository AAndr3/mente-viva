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
 	
<article>
        <label for="files">Select multiple files: </label>
        <input id="files" type="file" multiple/>
        <output id="result" />
</article>

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
</div>

<!--/vender-->


<style>
	.thumbnail {
		width: 30rem;
	}
	.result {
		background-color: red;
	}
	</style>
<script>

 var filesInput = document.getElementById("files");
        
        filesInput.addEventListener("change", function(event){
            
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                
                //Only pics
                if(!file.type.match('image'))
                  continue;
                
                var picReader = new FileReader();
                
                picReader.addEventListener("load",function(event){
                    
                    var picFile = event.target;
                    
                    var div = document.createElement("div");
                    
                    div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/> <a href='#' class='remove_pict'>X</a>";
                    
                    output.insertBefore(div,null);   
                    div.children[1].addEventListener("click", function(event){
                       div.parentNode.removeChild(div);
                    });         
                
                });
                
                 //Read the image
                picReader.readAsDataURL(file);
            }                               
           
        });


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

		if(contagem == 8) {
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


