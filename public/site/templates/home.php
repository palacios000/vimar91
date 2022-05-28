<?php require 'inc/head.php' ?>
  <body class="" >
	<!-- Container div -->
	<div>
		<!-- Navigation -->
		<div class="flex bg-white h-15p mt-auto px-16 sticky top-0 z-50">
			<div class="uppercase my-auto text-36pt">
				<a href="#">
					<span class="font-bold ">Vimar</span>1991
				</a>
			</div>
			<div class="flex flex-row gap-x-3 my-auto ml-auto uppercase text-grigio-chiaro text-21pt">
				<div class="pl-3.5 hover:text-gray-700 ease-in-out duration-100">
					<a href="#">
						V91
					</a>
				</div>
				<div class="pl-3.5 hover:text-gray-700 ease-in-out duration-100">
					<a href="#">
						Stories
					</a>
				</div>
				<div class="pl-3.5 hover:text-gray-700 ease-in-out duration-100">
					<a href="#">
						Catalogue
					</a>
				</div>
			</div>
			<!-- Fix visibility @sm @md -->
			<div class="visible sm:hidden uppercase">
				Menu
			</div>
		</div>

		<!-- First banner -->
		<div class="relative h-42p w-full overflow-hidden bg-green-200">
			<img class="object-cover w-full h-auto max-h-42p z-0" src="<?= $config->urls->templates?>pictures/1-wide.jpg" alt="flower banner">
			<div class="absolute inset-y-0 right-1/4 pt-5p md:pt-10 text-banner col-start-2 flex w-1/4 z-10 text-black font-semibold text-50pt">
			LINFA COLLECTION NEW SS MAY 2022
			</div>
		</div>

		<!-- Second banner -->
		<div class="relative h-42p w-full overflow-hidden bg-red-200">
			<img class="object-cover w-full h-auto max-h-42p z-0" src="<?= $config->urls->templates?>pictures/2-wide.jpg" alt="Woman picture">
			<div class="absolute inset-y-0 left-0 pl-16 text-banner col-start-2 flex w-1/4 z-10 text-white font-semibold pt-6p md:pt-10 text-50pt">
				V91 <br> + BALOJI FIRENZE UFFIZI 1
			</div>
		</div>

		<!-- Second banner -->
		<div class="relative h-42p w-full overflow-hidden bg-red-200">
			<img class="object-cover w-full h-auto max-h-42p z-0" src="<?= $config->urls->templates?>pictures/2-wide.jpg" alt="Woman picture">
			<div class="absolute inset-y-0 left-0 pl-16 text-banner col-start-2 flex w-1/4 z-10 text-white font-semibold pt-6p md:pt-10 text-50pt">
				V91 <br> + BALOJI FIRENZE UFFIZI 2
			</div>
		</div>

		<!-- Second banner -->
		<div class="relative h-42p w-full overflow-hidden bg-red-200">
			<img class="object-cover w-full h-auto max-h-42p z-0" src="<?= $config->urls->templates?>pictures/2-wide.jpg" alt="Woman picture">
			<div class="absolute inset-y-0 left-0 pl-16 text-banner col-start-2 flex w-1/4 z-10 text-white font-semibold pt-6p md:pt-10 text-50pt">
				V91 <br> + BALOJI FIRENZE UFFIZI 3
			</div>
		</div>
  <?php require 'inc/footer.php' ?>
</body>

</html>
