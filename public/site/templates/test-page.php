<?php include 'inc/head.php' ?>
	<body>
		<nav id="topnav" class="bg-red-500 text-white h-28 w-full" uk-sticky>
			<div class="relative ">
				<div id="logo" class="absolute top-0 left-0">logo</div>
				<div id="testo" class="absolute top-0 right-0">testo</div>
			</div>
		</nav>
		<h1 class="text-5xl font-bold text-green-600"><?php echo $page->title; ?></h1>
		<?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
		<p class="text-4xl py-20">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt recusandae dolor nobis laborum repellendus enim placeat sapiente, maiores. Amet aperiam quasi exercitationem rem dicta. Qui ipsum sequi explicabo doloribus possimus.
		</p>
		<!-- git non va -->
		<!-- git non va -->
		<!-- git non va -->


	<?php include 'inc/footer.php' ?>

	<script>
		//menu sticky a scomparsa
		stiki     = document.getElementById("topnav");
		testo = document.getElementById("testo");
		logo	  = document.getElementById("logo");

		//active sticky
		UIkit.util.on('#topnav', 'active', function () {
		    stiki.classList.remove("h-28");
		    stiki.classList.add("h-12");

		    logo.classList.add("scale-75", "transition");
		    testo.classList.add("scale-75", "transition");
		    //
		});

		//inactive sticky
		UIkit.util.on('#topnav', 'inactive', function () {
		    stiki.classList.remove("h-12");
		    stiki.classList.add("h-28");
		    
		    logo.classList.add("scale-100", "transition");
		    testo.classList.add("scale-100", "transition");

		});

	</script>


	</body>
</html>
