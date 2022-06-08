<?php require 'inc/head.php' ?>
  <body class="w-screen" >
	<!-- Container div -->
	<div>
		<?php require 'inc/menu.php' ?>

		<!-- First banner -->
		<section id="allBanners" 
		>
		<div class="h-42p w-full overflow-hidden relative">
			<img class="object-cover h-76 md:h-42p md:w-full z-0" src="<?= $config->urls->templates?>pictures/1-wide.jpg" alt="flower banner">
			<div class="absolute w-full sm:pl-8 md:pl-0 md:right-0 p-3 inset-y-0 flex md:w-1/2 align-center z-10 text-black font-bold text-8vh leading-7vh tracking-widest">
				<a class="titolo self-center w-1/2" x-data x-cloak x-intersect-class.once="visible animate__animated animate__fadeInRight" >
					LINFA COLLECTION NEW SS MAY 2022
				</a>
			</div>
		</div>

		<!-- Second banner -->
		<div class="h-42p w-full overflow-hidden relative">
			<img class="object-cover h-42p w-full z-0" src="<?= $config->urls->templates?>pictures/2-wide.jpg" alt="Woman picture">
			<div class="absolute pl-8 md:pl-16 md:left-0 inset-y-0 flex  w-full md:w-1/2 align-center z-10 text-white font-bold text-8vh leading-7vh tracking-widest">
				<a class="titolo animate__animated self-center w-1/2" x-data x-cloak x-intersect-class.once="visible animate__animated animate__fadeInLeft">
					V91 <br> + BALOJI FIRENZE UFFIZI 1 
				</a>
			</div>
		</div>

		<!-- Third banner -->
		<div class="h-42p w-full overflow-hidden relative">
			<img class="object-cover h-42p md:w-full z-0" src="<?= $config->urls->templates?>pictures/1-wide.jpg" alt="flower banner">
			<div class="absolute w-full sm:pl-8 md:pl-0 md:right-0 p-3 inset-y-0 flex md:w-1/2 align-center z-10 text-black font-bold text-8vh leading-7vh tracking-widest">
				<a class="titolo animate__animated self-center w-1/2" uk-scrollspy-class="animate__fadeInLeft">
					LINFA COLLECTION NEW SS MAY 2022
				</a>
			</div>
		</div>

		<!-- Fourth banner -->
		<div class="h-42p w-full overflow-hidden relative">
			<img class="object-cover h-42p w-full z-0" src="<?= $config->urls->templates?>pictures/2-wide.jpg" alt="Woman picture">
			<div class="absolute pl-8 md:pl-16 md:left-0 inset-y-0 flex  w-full md:w-1/2 align-center z-10 text-white font-bold text-8vh leading-7vh tracking-widest">
				<a class="titolo animate__animated self-center w-1/2" uk-scrollspy-class="animate__fadeInLeft">
					V91 <br> + BALOJI FIRENZE UFFIZI 1 
				</a>
			</div>
		</div>
		</section>

  <?php require 'inc/footer.php' ?>
</body>

</html>
