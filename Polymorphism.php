<?php

// Üst sinif (Base Class)
class Heyvan
{
    protected $adi;

    public function __construct($adi)
    {
        $this->adi = $adi;
    }

    public function səsÇıxar()
    {
        return "Səs çıxır...";
    }

    public function getAdi()
    {
        return $this->adi;
    }
}

// Miras alan sinif 1 (Derived Class 1)
class It extends Heyvan
{
    public function __construct($adi)
    {
        parent::__construct($adi);
    }

    public function səsÇıxar()
    {
        return "hav-hav!";
    }
}

// Miras alan sinif 2 (Derived Class 2)
class Qus extends Heyvan
{
    public function __construct($adi)
    {
        parent::__construct($adi);
    }

    public function səsÇıxar()
    {
        return "Cik-cik!";
    }
}

// Polymorphism nümunəsi
$heyvanlar = array(new It("Buldog"), new Qus("Kanarya"));

foreach ($heyvanlar as $heyvan) {
    echo $heyvan->getAdi() . ": " . $heyvan->səsÇıxar() . "<br>";
}
