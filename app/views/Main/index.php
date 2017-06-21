<div class="container">
	<div class="row">
		<h1>Posts</h1>
	
		<?php if(!empty($posts)):?>
		<?php foreach($posts as $item):?>
		<div class="panel panel-default">
		  <div class="panel-heading"><?= $item['title']?></div>
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
	
		<br>
		<code>Количество запросов: <?= dd(vendor\core\Db::$countSql); ?></code>	
		<br>
		<code>Запрос: <?= dd(vendor\core\Db::$queryes); ?></code>


	</div>
</div>