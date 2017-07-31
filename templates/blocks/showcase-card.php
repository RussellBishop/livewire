<div>
	<div class="text-align-center relative">
		<group>
			<div class="text-align-center pad-sides-2 pad-verticals-2 absolute bg-1 z-1 border" data-id="showcaseinfo<?=$x?>" data-group="showcase-popup">
				<div data-target="showcaseinfo<?=$x?>" data-action="close">
					<h3 class="push-bottom-2"><?=$post['title'];?></h3>
					<div class="text-align-left pad-sides-1 pad-verticals-1 bg-2"><?=$post['info'];?></div>
					<div class="pad-verticals-1 text-align-left spacing">
					<p><strong>Markets exported to:</strong></p>
					<grid sizes="12|12|4">
		                <div class="text-small "><div class="bg-3">USA</div></div>
		                <div class="text-small "><div class="bg-3">China</div></div>
		                <div class="text-small "><div class="bg-3">Europe</div></div>
		            </grid>
		            <p><strong>Brands:</strong></p>
		            <grid sizes="12|12|4">
						<div class="bg-2 text-small text-align-center">Logo</div>
						<div class="bg-2 text-small text-align-center">Logo</div>
						<div class="bg-2 text-small text-align-center">Logo</div>
		            </grid>
		            </div>
	            </div>
				<a href="<?=$post['link'];?>" class="button">Read more</a>
			</div>		
			
		</group>
		<div class="text-align-center bg-1 border pad-bottom-4" data-target="showcaseinfo<?=$x?>" data-action="open">
		<h3 class="pad-verticals-2 push-bottom-6"><?=$post['title'];?></h3>
		<div class="pad-sides-1">
		<div class="cover pad-verticals-5" style="opacity: 1; background-image: url('<?=$post['image'];?>');"></div>
		</div>
		</div>
	</div>
</div>
