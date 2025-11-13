<?php
class Produk {
    // property
    public $judul, $penerbit, $harga;

    // constructor
    public function __construct($judul, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul || $this->penerbit";
    }
}

class komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul, $penerbit, $harga, $jmlHalaman) {
        $this->jmlHalaman = $jmlHalaman;
        parent::__construct($judul, $penerbit, $harga);
    }

    public function getLabel() {
        return $this->judul;
    }

    public function getInfoKomik() {
        echo "Label: " . parent::getLabel();
        echo "<br>";
        echo "Harga: Rp. {$this->harga}";
        echo "<br>";
        echo "Halaman: {$this->jmlHalaman} Halaman";
    }
}

$produk = new Produk("Harry Potter", "Gramed", "2JT");
echo $produk->getLabel();
echo "<br><br>";

$komik1 = new komik("Naruto", "Shonen Jump", 50000, 200);
echo $komik1->getLabel();
?>