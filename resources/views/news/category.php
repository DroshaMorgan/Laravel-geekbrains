<?php foreach($categoryList as $category): ?>
<div style="border: 1px solid green;">
    <h2><a href="<?=route('news.index')?>"><?=$category['categoryTitle']?></a></h2>
</div>
<?php endforeach; ?>
