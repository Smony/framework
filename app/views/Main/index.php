<div class="container">
	<div class="row">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Menu</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php new \vendor\widgets\menu\Menu([
							'conteiner' => 'ul',
							'table' => 'categories',
							//'cache' => 60
						]); ?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div id="ajaxme"></div>

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