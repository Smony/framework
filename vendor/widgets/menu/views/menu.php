<li class="dropdown">
    <a href="?id=<?=$id?>" class="dropdown-toggle" data-toggle="dropdown"><?=$category['title']?></a>
    <?php if(isset($category['childs'])):?>
        <ul>
            <?= $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>