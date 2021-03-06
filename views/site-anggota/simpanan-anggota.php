<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiSimpananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Transaksi Simpanan untuk Bulan Mei 2015';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-simpanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_trans',
            'kode_simpanan',
            'tanggal',
            //'no_anggota',
            'jumlah',
            // 'keterangan',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
