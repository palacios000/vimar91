<?php require 'inc/head.php' ?>
  <body class="" >
	<!-- Container div -->
	<div>
		<?php require 'inc/menu.php' ?>

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
					<div class="uppercase text-6vh leading-6vh font-bold tracking-widest pb-2">
						Swinging <br> africa
					</div>
					<!-- Card description -->
					<div class="text-sm">
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
					<div class="uppercase text-6vh leading-6vh font-bold tracking-widest pb-2">
						ELHAM M. AGHILI <br> HYBRIDS					
					</div>
					<!-- Card description -->
					<div class="text-sm">
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
					<div class="uppercase text-6vh leading-6vh font-bold tracking-widest pb-2">
						Swinging <br> africa
					</div>
					<!-- Card description -->
					<div class="text-sm">
						The desire to celebrate a renewed freedom after this pandemic situation, proposes a new ethic for the world based on a better living.
					</div>
				</div>
			</div>
			<!-- Title-first Post -->
			<div class="flex flex-col flex-grow mb-23">
				<div class="w-77p">
					<!-- Card title -->
					<div class="uppercase text-6vh leading-6vh font-bold tracking-widest pb-2">
						ELHAM M. AGHILI <br> HYBRIDS					
					</div>
					<!-- Card description -->
					<div class="text-sm">
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
