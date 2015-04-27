<?php
class UserController extends Veritabani {
    private $eposta;
    private $sifre;
    public $conn;
    public function __construct () {
        $this->conn=parent::__construct();
    }

    public function getPostGiris ($pe, $ps) {
        if (!$_POST[$pe] || !$_POST[$ps]) {
            return false;
        } else {
            $this->eposta=$_POST[$pe];
            $this->sifre=$_POST[$ps];
            return true;
        }
    }

    public function girisKontrol ($pr) {
        if ($pr==true) {
            $sorgu = "SELECT * FROM kullanicilar WHERE kEposta = ? and kSifre = ?";
            $sonuc = $this->conn->prepare($sorgu);
            $sonuc->execute(array($this->eposta, $this->sifre));
            if ($sonuc->rowCount()>0) {
                session_start ();
                $_SESSION["oturum"]=true;
                $_SESSION["eposta"]=$this->eposta;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function tumBilgiGetir () {
        $sorgu = "SELECT * FROM kullanicilar WHERE kEposta=?";
        $sonuc = $this->conn->prepare($sorgu);
        $sonuc->execute(array($_SESSION["eposta"]));
        $r=$sonuc->fetch(PDO::FETCH_NUM);
        return $r;
    }
} 