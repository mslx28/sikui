<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TransaksiSimpanan */

$this->title = 'Tambah Simpanan Sukarela';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Simpanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-simpanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formSukarela', [
        'model' => $model,
    ]) ?>

</div>
