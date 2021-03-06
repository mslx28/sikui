<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PembayaranPinjaman;

/**
 * PembayaranPinjamanSearch represents the model behind the search form about `app\models\PembayaranPinjaman`.
 */
class PembayaranPinjamanSearch extends PembayaranPinjaman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_trans', 'tgl_bayar'], 'safe'],
            [['no_angsuran', 'jumlah'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PembayaranPinjaman::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'tgl_bayar' => $this->tgl_bayar,
            'no_angsuran' => $this->no_angsuran,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'kode_trans', $this->kode_trans]);

        return $dataProvider;
    }
}
