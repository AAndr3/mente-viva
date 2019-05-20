<header>

	<!--HEADER-WRAPPER-->

	<div class="header-wrapper">

		<img src="assets/images/logo.png">

		<div class="informacoes_icone_div">

			<div class="icone_div">
				<i id="icone" class="fas fa-envelope"></i>
			</div>

			<h5 id="info_email" class="info">Para mais informações envie um email para<br><span class="important">menteviva@gmail.com</span></h5>

		</div>

		<div class="informacoes_icone_div">

			<div class="icone_div">
				<i id="icone" class="fas fa-phone"></i>
			</div>

			<h5 id="info_contato" class="info">Para ajuda ligue para<br><span class="important">960442568</span></h5>

		</div>

		<div class="social_links">
			<i class="fab fa-facebook-square social_link social"></i>
		    <i class="fab fa-instagram social_link social"></i>
		    <i class="fab fa-twitter-square social_link social"></i>
		    <i class="fab fa-google-plus-square social_link social"></i>
		</div>

		<button id="entrar" class="entrar_registar">Login/Registar</button>

	</div>

	<!-- /HEADER-WRAPPER-->

	<div class="nav-wrapper">
		
		<div class="nav-text">
			
			<div class="nav-menu" id="menu">
				<a href="javascript:void(0);" class="icon" onclick="responsivo_menu()"><i class="fa fa-bars"></i></a>
				<a href="index.php">Home</a>
				<a href="#pesquisar">Pesquisar</a>
				<a href="#vender">Vender veículo</a>
				<a href="#informacoes">Informações</a>
			</div>

			<div class="nav-resto">
				<button onclick="myFunction()" class="btn_profile"><i class="fas fa-user"></i><i style="margin-left: 0.6rem;" class="fas fa-angle-down"></i></button>
					<div id="dropdown-profile" class="dropdown-content">
					    <a href="#perfil">Perfil</a>
					    <a href="#pass">Mudar palavra passe</a>
					    <a href="#email">Mudar email</a>
   					    <a href="#sari">Sair</a>

					  </div>
				<input class="input_search" type="text" placeholder="Pesquisar">
			</div>
				
		</div>

	</div>

</header>


<script>


function myFunction() {
	document.getElementById("dropdown-profile").classList.toggle("show");
}

function responsivo_menu() {
  var x = document.getElementById("menu");
  if (x.className === "nav-menu") {
    x.className += " responsive";
  } else {
    x.className = "nav-menu";
  }
}

	
$(window).resize(function() {
  if ($(window).width() <= 1059) {
  	document.getElementById("info_email").innerHTML = "menteviva@gmail.com";
  	document.getElementById("info_contato").innerHTML = "960442568";
  } else {
  	document.getElementById("info_email").innerHTML = "Para mais informações envie um email para<br><span class='important'>menteviva@gmail.com</span>";
  	document.getElementById("info_contato").innerHTML = "Para ajuda ligue para<br><span class='important'>960442568</span>";
  }
});


$(window).on('load', function() {
  if ($(window).width() <= 1059) {
  	document.getElementById("info_email").innerHTML = "menteviva@gmail.com";
  	document.getElementById("info_contato").innerHTML = "960442568";
  } else {
  	document.getElementById("info_email").innerHTML = "Para mais informações envie um email para<br><span class='important'>menteviva@gmail.com</span>";
  	document.getElementById("info_contato").innerHTML = "Para ajuda ligue para<br><span class='important'>960442568</span>";
  }
});

</script>