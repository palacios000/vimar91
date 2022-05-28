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

		<!-- Posts grid -->
		<div class="grid grid-cols-2 px-16 gap-x-16">
			<!-- Picture-first Post -->
			<div class="flex flex-col flex-grow mb-23">
				<!-- Add classes .order-last and .mt-7 when printing even elements -->
				<!-- Leave just .pb-7 when printing odd elements -->
				<div class="pb-7">
					<img class="object-cover w-full" src="<?= $config->urls->templates?>pictures/3.jpg" alt="African man">
				</div>
				<div class="w-77p">
					<!-- Card title -->
					<div class="uppercase text-36pt font-semibold leading-7 pb-2">
						Swinging <br> africa
					</div>
					<!-- Card description -->
					<div class="leading-4 text-17pt">
						The desire to celebrate a renewed freedom after this pandemic situation, proposes a new ethic for the world based on a better living.
					</div>
				</div>
			</div>
			<!-- Title-first Post -->
			<div class="flex flex-col flex-grow mb-23">
				<div class="order-last mt-7">
					<img class="object-cover"	src="<?= $config->urls->templates?>pictures/2-mirror.jpg" alt="Woman">
				</div>
				<div class="w-77p">
					<!-- Card title -->
					<div class="uppercase text-36pt font-semibold leading-7 pb-2">
						ELHAM M. AGHILI <br> HYBRIDS					
					</div>
					<!-- Card description -->
					<div class="leading-4 text-17pt">
						A precious, dreamy, and even magical atmosphere, sparkling with positive energy necessary to escape from the mundane life.
					</div>
				</div>
			</div>
			<!-- Picture-first Post -->
			<div class="flex flex-col flex-grow mb-23">
				<div class="pb-7">
					<img class="object-cover w-full" src="<?= $config->urls->templates?>pictures/4.jpg" alt="African man">
				</div>
				<div class="w-77p">
					<!-- Card title -->
					<div class="uppercase text-36pt font-semibold leading-7 pb-2">
						Swinging <br> africa
					</div>
					<!-- Card description -->
					<div class="leading-4 text-17pt">
						The desire to celebrate a renewed freedom after this pandemic situation, proposes a new ethic for the world based on a better living.
					</div>
				</div>
			</div>
			<!-- Title-first Post -->
			<div class="flex flex-col flex-grow mb-23">
				<div class="w-77p">
					<!-- Card title -->
					<div class="uppercase text-36pt font-semibold leading-7 pb-2">
						ELHAM M. AGHILI <br> HYBRIDS					
					</div>
					<!-- Card description -->
					<div class="leading-4 text-17pt">
						A precious, dreamy, and even magical atmosphere, sparkling with positive energy necessary to escape from the mundane life.
					</div>
				</div>
				<div class="pt-7">
					<img class="object-cover w-full"	src="<?= $config->urls->templates?>pictures/5.jpg" alt="Woman">
				</div>
			</div>
		</div>
  <?php require 'inc/footer.php' ?>
</body>

</html>
