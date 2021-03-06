<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnggotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_anggota',
            'nama',
            //'kode_unit',
            'alamat',
            //'tgl_lahir',
            //'total_simpanan',
            'total_pinjaman',

            ['class' => 'yii\grid\ActionColumn',
                          'template'=>'{pinjaman-anggota}',
                            'buttons'=>[
                              'pinjaman-anggota' => function ($url, $model) {     
                                return Html::a('<span >Pilih</span>', $url, [
                                        'title' => Yii::t('yii', 'Pilih Anggota'),
										'class' => 'btn btn-success'
                                ]);                                
                              }
							]                            
            ],
        ],
    ]); ?>

</div>
