<?php
/** 
 * 
 * 
 */
class Model latihan1 extends CI_Model
{
    //membuat variabel untuk menampung nilai
    public $nilai, $nilai2, $nilai3;
    //membuat method penjumlahan
    public function jumlah ($nil1=null,$nil2=null)
    {
    $this->nilai1=nil1;
    $this->nilai2=nil2;
    $this->hasil= $this->nilai1 + $this->nilai2;
    return $this->hasil;
    }
}