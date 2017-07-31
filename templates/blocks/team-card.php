<div class="spacing">
	<div class="bg-3 relative text-align-left">
		<div class="ratio-100 fill cover" style="opacity: 1; background-image: url('<?=$post['image'];?>');"></div>
	</div>
	<div class="spacing">
		<h3><?=$post['first'];?> <?=$post['last'];?></h3>
		<em><?=$post['position'];?></em>
		<flex justify="between">
			<flex>
				<icon envelope></icon>
				<div>&nbsp;</div>
				<icon twitter></icon>
			</flex>
			<a href="#" class="button">Meet <?=$post['first'];?></a>
		</flex>
	</div>
</div>

