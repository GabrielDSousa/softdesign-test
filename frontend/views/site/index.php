<?php

/** @var yii\web\View $this */

$this->title = 'Yii2 Angular Demo App';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">Yii Bookstore</h1>

            <section class="d-none d-md-block">
                <p class="lead">This is a demo application for Yii2 + AngularJS</p>
                <p class="lead">This application is a simple bookstore where you can create, read, update and delete books.</p>
                <p class="lead">You can also see the weather forecast for your city.</p>
                <p class="lead">To see the books, click on the button below.</p>
            </section>

            <!-- Forecast -->
            <div class="d-flex justify-content-center">
                <div class="card bg-light text-dark col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['results']['city'] ?></h5>
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <?= \yii\helpers\Html::img("@web/images/{$data['results']['img_id']}.png", ['class' => 'img-fluid']) ?>
                            </div>
                            <div>
                                <p class="card-text"><?= $data['results']['temp'] ?> ºC</p>
                                <p class="card-text"><?= $data['results']['description'] ?></p>
                            </div>
                        </div>
                        <p class="card-text">Sunrise: <?= $data['results']['sunrise'] ?></p>
                        <p class="card-text">Sunset: <?= $data['results']['sunset'] ?></p>
                        <p class="card-text">Wind Speed: <?= $data['results']['wind_speedy'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-content">
        <div class="p-5 mb-4 bg-transparent rounded-3">
            <div class="container-fluid py-5 text-center">
                <a class="btn btn-outline-secondary" href="/books/index">Books</a>
            </div>
        </div>
    </div>
</div>