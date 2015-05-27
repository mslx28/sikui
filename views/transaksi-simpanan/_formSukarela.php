<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransaksiSimpanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-simpanan-form">

	<p class ="note"> <br> Kolom dengan <span class="required">*</span> wajib diisi.</p>

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'kode_simpanan')-> textInput(['value' => 'SPSKRL', 'readonly'=>true]) -> label('Kode Simpanan*')?>


    <?= $form->field($model, 'tanggal')->textInput(['type' => 'date'])->label('Tanggal Setoran *') ?>

    <?= $form->field($model, 'no_anggota')->textInput(['maxlength' => 20])->label('Nomor Anggota *') ?>


    <?= $form->field($model, 'jumlah')->textInput()->label('Jumlah Setoran  *') ?>


	
	<?= $form->field($model, 'keterangan')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		<?= Html::a('Batal', ['daftar'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
