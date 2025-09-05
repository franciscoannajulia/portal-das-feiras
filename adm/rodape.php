<style>
 .whatsapp-link {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			left: 40px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 1px 1px 2px #888;
			z-index: 1000;
		}

		.fa-whatsapp {
			margin-top: 16px;
		}
</style><!-- Footer --><!-- Footer -->
<a class="whatsapp-link" href="https://chat.whatsapp.com/JEn08GLQgeP6uUwSofTfsc" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2020 Todo Direito Reservado | Desenvolvido por <a href="https://apptuts.bio/franciscoannajulia" style="color: white;"  target="_blank">Anna Julia Francisco</a> </p>
    </div>
    <!-- /.container -->
  </footer>
<a id="subirTopo">
^</br>
subir</a>
  <!--Botao subir-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

jQuery("#subirTopo").hide();

jQuery('a#subirTopo').click(function () {
         jQuery('body,html').animate({
           scrollTop: 0
         }, 800);
        return false;
   });

jQuery(window).scroll(function () {
         if (jQuery(this).scrollTop() > 1000) {
            jQuery('#subirTopo').fadeIn();
         } else {
            jQuery('#subirTopo').fadeOut();
         }
     });
});
</script>
  <!--Fim Botao-->
	
<style>
    #subirTopo {
text-decoration: none;
background: rgba(30,156,161,.9);
bottom: 30px;
right: 30px;
color: #fff;
text-align: center;
cursor: pointer;
padding: 15px;
font-size: 15px;
font-weight: bold;
text-transform: uppercase;
position: fixed;
border: 0;
font-family: sans-serif;
opacity: .8;
}

#subirTopo:hover {
opacity:1;
}
</style>