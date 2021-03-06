<?php
namespace app\controllers;

use Yii;

class Authorization 
{
    private static $admin = array(
        'anggota' => array('index','view','create','update','status'),
        'barang' => array('index','view','create','update','delete','produk','upload'),
        'pembayaran-pinjaman' => array('index','view','create','print-kuitansi','update','delete', 'daftar', 'lihat'),
        'settingan' => array('index','view','create','update','pokok','batal'),
        'site-anggota' => array('view','index','simpanan-anggota','pinjaman-anggota','logout'),
        'site' => array('index','login','logout','print-kuitansi','print-angsuran','print-transaksi'),
        'transaksi-pinjaman' => array('index','penunggak','view','update','delete','uang','barang','daftar','lihat'),
        'transaksi-simpanan' => array('index','view','wajib','sukarela','ambil','upload','daftar','list','simpanan-anggota','lihat','print-kuitansi','simpanan-anggota-print'),
        'user' => array('index','view','create','update','delete')
    );
    private static $anggota = array(
        'barang' => array('index','view','produk'),
        'site-anggota' => array('view','index','simpanan-anggota','pinjaman-anggota','ubah-password','logout'),
        'site' => array('login','logout')
    );
    private static $guest = array(
        'site' => array('login'),
    );

    public static function authorize($controller, $action)
    {
        if(Yii::$app->user->isGuest) {
            return in_array($action,self::$guest[$controller]);
        } else {
            if(Yii::$app->user->identity->role == 'admin') {
                return in_array($action,self::$admin[$controller]);
            } elseif(Yii::$app->user->identity->role == 'anggota') {
                return in_array($action,self::$anggota[$controller]);
            }
        }
    }
}

?>