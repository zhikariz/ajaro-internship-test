<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property string $deskripsi
 * @property string $stok
 * @property string $harga
 * @property string $berat
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'deskripsi', 'stok', 'harga', 'berat'], 'required'],
            [['deskripsi'], 'string'],
            [['stok', 'harga', 'berat'], 'number'],
            [['kode'], 'string', 'max' => 8],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kode' => Yii::t('app', 'Kode'),
            'nama' => Yii::t('app', 'Nama'),
            'deskripsi' => Yii::t('app', 'Deskripsi'),
            'stok' => Yii::t('app', 'Stok'),
            'harga' => Yii::t('app', 'Harga'),
            'berat' => Yii::t('app', 'Berat'),
        ];
    }
}
