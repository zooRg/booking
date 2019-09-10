<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

	<div class="jumbotron">
		<h1>Наши книги!</h1>
	</div>

	<div class="body-content">

		<div class="row">
			<? foreach ($modelBook as $key => $item): ?>

				<div class="col-lg-4">
					<h2><?= $item->name; ?></h2>

					<p><?= $item->preview; ?></p>

					<p><b>Колличество книг: <?= $item->count; ?></b></p>
				</div>
			
			<? endforeach; ?>
		</div>

	</div>
</div>
