<!-- Navigation -->

<div class="flex bg-white h-12.5p sm-2:h-15p mt-auto px-8 md:px-16 sticky top-0 z-50">
	<div class="uppercase my-auto text-3xl sm-2:text-3xl tracking-widest">
		<a href="<?= $homepage->url ?>">
			<span class="font-semibold ">Vimar</span><span class="font-light tracking-tightest">1991</span>
		</a>
	</div>
	<div class="hidden sm-2:flex flex-row gap-x-3 my-auto ml-auto uppercase text-grigio-chiaro text-menu  tracking-widest">
		<div class="pl-3.5 hover:text-gray-700 ease-in-out duration-100">
			<a href="<?= $interne->url ?>">
				V91
			</a>
		</div>
		<div class="pl-3.5 hover:text-gray-700 ease-in-out duration-100">
			<a href="<?= $stories->url ?>">
				Stories
			</a>
		</div>
		<div class="pl-3.5 hover:text-gray-700 ease-in-out duration-100">
			<a href="<?= $catalogues->url ?>">
				Catalogue
			</a>
		</div>
	</div>
	<!-- Menu button -->
	<div class="visible sm-2:hidden uppercase text-3xl text-grigio-chiaro my-auto ml-auto tracking-widest">
		<div class="pl-3.5 hover:text-gray-700 ease-in-out duration-100">
			<a href="#">
				Menu
			</a>
		</div>
	</div>
</div>
