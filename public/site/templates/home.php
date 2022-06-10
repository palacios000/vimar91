<?php require 'inc/head.php' ?>

<body class="">
	<!-- Container div -->
	<div>
		<?php require 'inc/menu.php' ?>

		<!-- First banner -->
		<section id="allBanners" >

		<div class="h-29p sm-2:h-42p w-full overflow-hidden relative">
			<img class="object-cover h-29p sm-2:h-42p w-full z-0" src="<?= $config->urls->templates ?>pictures/1-wide.jpg" alt="flower banner">
			<div class="absolute w-full pl-8 sm-2:pl-0 sm-2:right-0 p-3 inset-y-0 flex sm-2:w-1/2 md:w-1/2 align-center z-10 text-black text-banner-mobile sm-2:text-8vh sm-2:leading-7vh tracking-widest">
				<div class="self-center w-2/5 sm:w-3/5 sm-2:w-1/2" x-data x-cloak x-intersect-class.once="visible animate__animated animate__fadeInRight" >
					LINFA COLLECTION NEW SS MAY 2022
				</a>
			</div>
		</div>

		<!-- Second banner -->

		<div class="h-29p sm-2:h-42p w-full overflow-hidden relative">
			<img class="object-cover h-29p sm-2:h-42p w-full z-0" src="<?= $config->urls->templates ?>pictures/2-wide.jpg" alt="Woman picture">
			<div class="absolute pl-8 md:pl-16 md:left-0 inset-y-0 flex w-full sm-2:w-1/2 align-center z-10 text-white text-banner-mobile sm-2:text-8vh sm-2:leading-7vh tracking-widest">
				<a class="self-center w-2/5 sm:w-3/5 sm-2:w-1/2" x-data x-cloak x-intersect-class.once="visible animate__animated animate__fadeInLeft">
					V91 <br> + BALOJI FIRENZE UFFIZI 1
				</a>
			</div>
		</div>





		</section>

		<?php require 'inc/footer.php' ?>
</body>

</html>