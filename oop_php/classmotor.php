<?php

class motor {

    var $merek;
    var $roda;
    private $harga;

    function statusHarga() {
        if ($this->harga > 2000000 ) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        
        return $status;
    }

    function setharga($x) {
        $this->harga = $x;
    }

    function bacaharga(){
        $this->harga;
    }

    public function __construct( $merek, $roda, $harga){
        $this->merek = $merek;
        $this->roda = $roda;
    }

    public function getLabel(){
        return "$this->merek, $this->roda";
    }
    }


class keretaApi extends motor {

    public $jumlah_gerbong;


    function setgerbong($y){
        $this->jumlah_gerbong = $y;
    }

    public function __construct( $merek, $harga, $jumlah_gerbong){
        $this->merek = $merek;
        $this->jumlah_gerbong = $jumlah_gerbong;
    }

    public function getLabel(){
        return "$this->jumlah_gerbong";
    }
}



?>