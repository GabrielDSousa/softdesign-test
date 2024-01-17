<?php 
$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-books container mt-3" data-ng-controller="BookController">
	<h2>Book List</h2>
	<?= $this->render('components/_create') ?>
    <?= $this->render('components/_read') ?>
    <?= $this->render('components/_filter') ?>
    <?= $this->render('components/_pagination') ?>
    <?= $this->render('components/_list') ?>
</div>