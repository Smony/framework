
<?php if(!empty($data)): ?>
	<?php foreach($data as $item): ?>
	<h1><?= $item['ID']?></h1>
	<?php endforeach; ?>
<?php endif; ?>