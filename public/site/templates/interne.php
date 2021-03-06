<?php require 'inc/head.php' ?>
 <body class="font-djr tracking-wider" >
	<!-- Container div -->
	<div>
		<?php require 'inc/menu.php' ?>

		<!-- Main container -->
		<div class="pt-7 pb-15 px-16 text-black">
			<!-- Occhiello -->
			<div class="uppercase text-sm font-bold text-grigio-chiaro hover:text-gray-700/70 ease-in-out duration-150">
				<a href="#">Mission</a>
			</div>

			<!-- Title -->
			<div class="text-5xl py-15  w-3/5 tracking-widest">
				<h1>V91 + SAMMY BALOJI @FIRENZE UFFIZZI</h1>
			</div>

			<!-- Strillo sinistra -->
			<div class="text-1xl md:text-2xxl font-semibold w-1/2 tracking-widest mr-auto pb-15">
				COLORE, CREATIVITÀ E STILE SONO IL FONDAMENTO DELLA NOSTRA STORIA.
			</div>

			<!-- Strillo destra -->
			<div class="text-1xl md:text-2xxl font-semibold w-1/2 tracking-widest ml-auto pb-15">
				COLORE, CREATIVITÀ E STILE SONO IL FONDAMENTO DELLA NOSTRA STORIA.
			</div>
			
			<!-- Left text -->
			<div class="text-base leading-5 tracking-widest w-1/2 mr-auto pb-15">
				Nata come aguglieria negli anni Settanta, progressivamente Vimar1991 , si differenzia dalle altre realtà tessili, specializzandosi nella produzione di filati fantasia con un focus sempre maggiore sulla ricerca e customizzazione di ogni progetto e prodotto. Situata a Carisio, in Piemonte, la sua sede si estende per più di 10000mq tra Biella e Vercelli.
			</div>

			<!-- Right text -->
			<div class="text-base leading-5 tracking-widest w-1/2 ml-auto pb-15">
				Nata come aguglieria negli anni Settanta, progressivamente Vimar1991 , si differenzia dalle altre realtà tessili, specializzandosi nella produzione di filati fantasia con un focus sempre maggiore sulla ricerca e customizzazione di ogni progetto e prodotto. Situata a Carisio, in Piemonte, la sua sede si estende per più di 10000mq tra Biella e Vercelli.
			</div>

			<!-- Small text left -->
			<div class="text-sm leading-4 tracking-widest w-1/2 mr-auto pb-15">
				Siamo promotori di bellezza. Ogni nostro filato è frutto di una meticolosa ricerca e sperimentazione che coinvolge tutte le fasi della produzione, dall’ideazione alla realizzazione. Tramandiamo e valorizziamo il nostro savoir-faire come un patrimonio da custodire e arricchire. Siamo promotori di bellezza. Ogni nostro
			</div>

			<!-- Small text right -->
			<div class="text-sm leading-4 tracking-widest w-1/2 ml-auto pb-15">
				Siamo promotori di bellezza. Ogni nostro filato è frutto di una meticolosa ricerca e sperimentazione che coinvolge tutte le fasi della produzione, dall’ideazione alla realizzazione. Tramandiamo e valorizziamo il nostro savoir-faire come un patrimonio da custodire e arricchire. Siamo promotori di bellezza. Ogni nostro
			</div>

			<!-- One picture -->
			<div class="w-700px mx-auto pb-15">
				<img src="<?= $config->urls->templates?>pictures/pic700.jpg" alt="">
			</div>

			<!-- Two pictures -->
			<div class="pb-15 flex flex-row gap-x-16 justify-center">
				<div class="w-520px h-auto">
					<img class="object-cover" src="<?= $config->urls->templates?>pictures/7.png" alt="">
				</div>
				<div class="w-520px h-auto pt-24">
					<img class="object-cover" src="<?= $config->urls->templates?>pictures/8.jpg" alt="">
				</div>
			</div>
		</div>

		<!-- Banner picture -->
		<div class="w-full">
			<img class="w-full" src="<?= $config->urls->templates?>pictures/banner.png" alt="">
		</div>

		<!-- 3 Pictures container -->
		<div class="relative w-full pt-15 pl-25 pr-20 pb-40 flex flex-row justify-center">
			
			<div class="h-auto w-29p w-100 h-100">
				<img src="<?= $config->urls->templates?>pictures/7.png" alt="picture">
			</div>
			<div class="relative h-auto w-29p mt-24 -ml-11">
				<img class="absolute w-full h-100" src="<?= $config->urls->templates?>pictures/8.jpg" alt="pic2">
			</div>
			<div class="relative h-auto w-29p mt-11 -ml-8">
				<img class="absolute w-full h-100" src="<?= $config->urls->templates?>pictures/9.jpg" alt="pic3">
			</div> 
		</div>

		<!-- See also section -->
		<div class="py-15 bg-black px-16">
			<!-- Title section -->
			<div class="uppercase text-white text-sm font-bold pb-8">
				See also
			</div>

			<!-- Posts section -->
			<div class="grid grid-cols-2 gap-y-10 text-white">
				<!-- Post -->
				<div class="pr-40">
					<a class="hover:opacity-80 ease-in-out duration-200" href="#">
						<!-- Title -->
						<div class="uppercase text-sm font-bold w-1/2 pb-2">
							Linfa <br> SS 2023
						</div>
	
						<!-- Paragraph -->
						<div class="text-xs w-4/5 pb-9">
							The desire to celebrate a renewed freedom after this pandemic situation, proposes a new ethic for the world based on a better living.
						</div>
						<!-- Picture -->
						<div>
							<img src="<?= $config->urls->templates?>pictures/see-also-1.png" alt="">
						</div>
					</a>
				</div>

				<!-- Post -->
				<div class="pr-40">
					<a class="hover:opacity-80 ease-in-out duration-200" href="#">
						<!-- Title -->
						<div class="uppercase text-sm font-bold w-1/2 pb-2">
							GALA <br> LAMÉ YARNS
						</div>
	
						<!-- Paragraph -->
						<div class="text-xs w-4/5 pb-9">
							A precious, dreamy, and even magical atmosphere, sparkling with positive energy necessary to escape from the mundane life.
						</div>
						<!-- Picture -->
						<div>
							<img src="<?= $config->urls->templates?>pictures/see-also-2.png" alt="">
						</div>
					</a>
				</div>

				<!-- Post -->
				<div class="pr-40">
					<a class="hover:opacity-80 ease-in-out duration-200" href="#">
						<!-- Title -->
						<div class="uppercase text-sm font-bold w-1/2 pb-2">
							Linfa <br> SS 2023
						</div>
	
						<!-- Paragraph -->
						<div class="text-xs w-4/5 pb-9">
							The desire to celebrate a renewed freedom after this pandemic situation, proposes a new ethic for the world based on a better living.
						</div>
						<!-- Picture -->
						<div>
							<img src="<?= $config->urls->templates?>pictures/see-also-1.png" alt="">
						</div>
					</a>
				</div>

				<!-- Post -->
				<div class="pr-40">
					<a class="hover:opacity-80 ease-in-out duration-200" href="#">
						<!-- Title -->
						<div class="uppercase text-sm font-bold w-1/2 pb-2">
							GALA <br> LAMÉ YARNS
						</div>
	
						<!-- Paragraph -->
						<div class="text-xs w-4/5 pb-9">
							A precious, dreamy, and even magical atmosphere, sparkling with positive energy necessary to escape from the mundane life.
						</div>
						<!-- Picture -->
						<div>
							<img src="<?= $config->urls->templates?>pictures/see-also-2.png" alt="">
						</div>
					</a>
				</div>
			</div>
		</div>

	</div>
 <?php require 'inc/footer.php' ?>
</body>

</html>
