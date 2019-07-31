<section class="menu-header sombra">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-tranparent p-0">
		  <a class="navbar-brand text-white p-0 m-0" href="./"><img class="logo" src="images/fabiana-canina-logo-14.svg"></a>
		  
		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item servicio active" id="servicio">
		        <a class="nav-link" href="#">SERVICIOS</a>
		      </li>
		      <li class="nav-item como-trabajo" id="como-trabajo">
		        <a class="nav-link" href="#">¿CÓMO TRABAJO?</a>
		      </li>
		      <li class="nav-item planes" id="planes">
		        <a class="nav-link" href="#">PLANES</a>
		      </li>
		      <li class="nav-item cita" id="cita">
		        <a class="nav-link" href="./#cita-div">QUIERO UNA CITA</a>
		      </li>		      
		      <li class="nav-item about" id="about">
		        <a class="nav-link" href="#">ABOUT ME</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</div>
</section>



<section class="menu-header sombra menu-to-fixed shadow">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-tranparent p-0">
		  <a class="navbar-brand text-white p-0 m-0" href="#"><img class="logo" src="images/fabiana-canina-logo-14.svg"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-" aria-controls="navbarSupportedContent-" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon text-white"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent-">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item servicio active" id="servicio">
		        <a class="nav-link" href="#">SERVICIOS</a>
		      </li>
		      <li class="nav-item como-trabajo" id="como-trabajo">
		        <a class="nav-link" href="#">¿CÓMO TRABAJO?</a>
		      </li>
		      <li class="nav-item planes" id="planes">
		        <a class="nav-link" href="#">PLANES</a>
		      </li>
		      <li class="nav-item cita" id="cita">
		        <a class="nav-link" href="./#cita-div">QUIERO UNA CITA</a>
		      </li>		      		
		      <li class="nav-item about" id="about">
		        <a class="nav-link" href="#">ABOUT ME</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</div>
</section>

<script type="text/javascript">

	$(document).ready(function(){    
		

	});

	$(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $(".menu-to-fixed").addClass("menu-fixed");
        } else {
            $(".menu-to-fixed").removeClass("menu-fixed");
        }
    });
	
</script>
