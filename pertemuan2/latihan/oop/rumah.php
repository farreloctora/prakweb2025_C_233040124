<?php
class Rumah {
    // property
    public $warna = "putih";
    public $jumlahKamar = 4;
    public $alamat = "Jl. Pasundan No. 1";

    // constructor
    public function __construct($warna, $jumlahKamar, $alamat) {
        $this->warna = $warna;
        $this->jumlahKamar = $jumlahKamar;
        $this->alamat = $alamat;
    }

    // method
    public function kunciPintu() {
        return "Rumah ini dikunci";
    }

    public function warnaCat() {
        return $this->warna;
    }

    public function gantiWarna($warna) {
        $this->warna = $warna;
        return "Warna rumah berubah menjadi $warna";
    }
}

function pasangListrik($rumah) {
    return "Rumah ini dipasang listrik, rumah yang berwarna " . $rumah->warna;
}

$rumahAndi = new Rumah("Merah", 4, "Jl. Pasundan No. 4");
echo pasangListrik($rumahAndi);
echo "<br>";

// object
$rumahSaya = new Rumah("Ungu", 8, "Jl. Pasundan No. 2");
// $rumahSaya->gantiWarna("Merah");
echo "Rumah saya: " . $rumahSaya->warnaCat() . ", terdapat " . $rumahSaya->jumlahKamar . " kamar, dan berada di " . $rumahSaya->alamat . "<br>";

$rumahTetangga = new Rumah("Hijau", 6, "Jl. Pasundan No. 3");
// $rumahTetangga->gantiWarna("Biru");
echo "Rumah tetangga: " . $rumahTetangga->warnaCat() . ", terdapat " . $rumahTetangga->jumlahKamar . " kamar, dan berada di " . $rumahTetangga->alamat . "<br>";
?>