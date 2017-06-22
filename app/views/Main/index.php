<div class="container">
	<div class="row">
		<h1><?= $post['title']?></h1>
			<button class="btn btn-default" id="send">Ajax Test</button>
		<?php if(!empty($posts)):?>
		<?php foreach($posts as $item):?>
		<div class="panel panel-default">
		  <div class="panel-heading"><a href="<?= $item['id']?>"><?= $item['title']?></a></div>
		  <div class="panel-body">
			<?= $item['text']?>
		  </div>
		  <!-- List group -->
		  <ul class="list-group">
			<li class="list-group-item"><?= $item['id']?></li>
			<li class="list-group-item"><?= $item['date']?></li>
		  </ul>
		</div>
		 
		<?php endforeach;?>
		<?php endif;?>
		
	
	</div>
</div>