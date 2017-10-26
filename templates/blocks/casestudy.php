<div class="u-full-height bg-4 relative">

	<div class="fill cover z-1 o-50" style="background-image: url('/assets/img/building.jpg');"></div>

	<div class="z-2 relative">
	    <grid large="10" class="contained pad-top-5">
	    	<div>
			    <div class="pad-verticals-3">The project</div>
			    <div class="h0"><?= live($page->title, 'sentences|1')?></div>
			</div>
		</grid>
		<grid sizes="12|6|6" class="contained spacing pad-verticals-5 push-top-10">
		    <div class="text-align-left">

		        <h1 class="">
		            <?= live($page->testimonial_1, 'sentences|1')?>
		        </h1>
		        <h2 class="">
		            <?= live($page->testimonial_1_author, 'sentences|1')?>
		        </h2>

		    </div>
		    <div class="text-align-left" large="9">

		        <h2 class="">
		            <?= live($page->project_1_vision, 'sentences|1')?>
		        </h2>

		    </div>

		</grid>

	</div>

</div>