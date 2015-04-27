<?php
class User {
    private $kID;
    private $kKadi;
    private $kAdi;
    private $kSoyadi;
    private $kSifre;
    private $kEposta;
    private $kayitTarih;

    public function getkID () {
        return $this->kID;
    }
    public function setkID ($kID) {
        $this->kID=$kID;
    }

    public function getkKadi () {
        return $this->kKadi;
    }
    public function setkKadi ($kKadi) {
        $this->kKadi=$kKadi;
    }

    public function getkAdi () {
        return $this->kAdi;
    }
    public function setkAdi ($kAdi) {
        $this->kAdi=$kAdi;
    }

    public function getkSoyadi () {
        return $this->kSoyadi;
    }
    public function setkSoyadi ($kSoyadi) {
        $this->kSoyadi=$kSoyadi;
    }

    public function getkSifre () {
        return $this->kSifre;
    }
    public function setkSifre ($kSifre) {
        $this->kSifre=$kSifre;
    }

    public function getkEposta () {
        return $this->kEposta;
    }
    public function setkEposta ($kEposta) {
        $this->kEposta=$kEposta;
    }

    public function getkayitTarih () {
        return $this->kayitTarih;
    }
    public function setkayitTarih ($kayitTarih) {
        $this->kayitTarih=$kayitTarih;
    }
} 