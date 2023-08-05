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
}

// Miras alan sinif (Derived Class)
class It extends Heyvan
{
    public function __construct($adi)
    {
        parent::__construct($adi);
    }

    public function qulaqVur()
    {
        return $this->adi . " - " . $this->səsÇıxar();
    }
}

// It sinifindən obyekt yaradırıq
$it = new It("Buldog");

// Miras alan sinifdən üst sinifin metodunu çağırırıq
echo $it->qulaqVur();
// Çıxış: "Buldog - Səs çıxır..."