<?php
//ENCAPSULATİON
class BankHesab
{
    private $balans;

    public function __construct($balans)
    {
        $this->balans = $balans;
    }

    public function balansGoster()
    {
        return $this->balans;
    }

    public function pulCek($miktar)
    {
        if ($miktar > $this->balans) {
            return "Kifayət qədər pul yoxdur.";
        } else {
            $this->balans -= $miktar;
            return "Uğurla çəkildi.";
        }
    }

    public function pulYatir($miktar)
    {
        $this->balans += $miktar;
        return "Uğurla yatırıldı.";
    }
}

$hesab = new BankHesab(1000);
echo $hesab->balansGoster(); // Çıxış: 1000
echo $hesab->pulCek(500); // Çıxış: "Uğurla çəkildi."
echo $hesab->pulYatir(200); // Çıxış: "Uğurla yatırıldı."






//1. Public daxili giriş növü, sinifdən və ya hər hansı başqa sinifdən istifadəçi tərəfindən istifadə edilə bilən üzvləri və metodları bildirir.
/*
class Telefon
{
    public $marka; // Hər kəs tərəfindən istifadə edilə bilər
    public function zəngEt()
    {
        return "Zəng edilir...";
    }
}

$telefon = new Telefon();
$telefon->marka = "Samsung"; // Public üzv dəyərini dəyişmək olar
echo $telefon->zəngEt(); // Public metod istifadə etmək olar
*/





/*2. Private (Özəl): private daxili giriş növü, 
yalnız həmin sinifin daxili funksiyalarından istifadə etməyə imkan verir, 
başqa siniflər və ya obyektlər bu üzvlərə və metodlara çatışa bilməz.
*/
/*
class Kassa
{
    private $balans = 100; // Yalnız Kassa sinfi üçün gözlənilir

    private function balansDeyis($miktar)
    {
        $this->balans += $miktar;
    }

    public function pulYatir($miktar)
    {
        $this->balansDeyis($miktar);
    }
}

$kassa = new Kassa();
// $kassa->balans = 1000; // Səhv: Private üzv dəyərini dəyişmək olmaz
// $kassa->balansDeyis(50); // Səhv: Private metod istifadə edilməz
$kassa->pulYatir(50); // Doğru: Public metod vasitəsilə private metod istifadə edilir
*/


/*3. protected (Müdafiə olunan): protected daxili giriş növü, 
yalnız həmin sinifin daxili funksiyaları və 
onun miras alan sinifləri tərəfindən istifadə oluna bilən üzvləri və metodları təyin edir.
*/
/*
class Heyvan
{
    protected $adi; // Heyvan sinfi və miras alan siniflər üçün gözlənilir

    protected function səsÇıxar()
    {
        return "Səs çıxır...";
    }
}

class It extends Heyvan
{
    public function qulaqVur()
    {
        return $this->adi . " - " . $this->səsÇıxar();
    }
}

$it = new It();
// $it->adi = "Buldog"; // Səhv: Protected üzv dəyərini dəyişmək olmaz
echo $it->qulaqVur(); // Doğru: Protected metod və üzv miras alan sinifdən istifadə edilir
*/