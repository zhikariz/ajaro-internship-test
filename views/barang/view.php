<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
?>
<div class="barang-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode',
            'nama',
            'deskripsi:ntext',
            [
                'attribute' => 'stok',
                'format' => ['decimal', 0]
            ],
            [
                'attribute' => 'harga',
                'format' => ['currency']
            ],
            [
                'attribute' => 'berat',
                'format' => ['decimal', 0]
            ],
        ],
    ]) ?>

</div>