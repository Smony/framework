<div class="container">
	<div class="row">
		<button><a href="user/singin">Вход</a></button>
		<button><a href="user/singup">Регистрация</a></button>
		<?php if(!empty($posts)): ?>
			<?php foreach($posts as $post): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="test/post/?id=<?=$post['id']?>"><h3 class="panel-title"><?=$post['title']?></h3></a>
			</div>
			<div class="panel-body">
				<?=$post['text']?>

			</div>
			<div class="panel-footer">

			</div>
		</div>
		<?php endforeach;?>
		<?php endif;?>

	</div>
</div>
