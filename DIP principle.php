<?php
//Without Dependency Inversion Principle:
class LowLevelModule
{
    public function doSomething()
    {
        echo "Hasan";
    }
}

class HighLevelModule
{
    private $lowLevelModule;

    public function __construct()
    {
        $this->lowLevelModule = new LowLevelModule();
    }

    public function useLowLevelModule()
    {
        $this->lowLevelModule->doSomething();
    }
}

//With Dependency Inversion Principle:
interface LowLevelInterface
{
    public function doSomething();
}

class LowLevelModule implements LowLevelInterface
{
    public function doSomething()
    {
        // Low-level module logic...
    }
}

class HighLevelModule
{
    private $lowLevelInterface;

    public function __construct(LowLevelInterface $lowLevelInterface)
    {
        $this->lowLevelInterface = $lowLevelInterface;
    }

    public function useLowLevelModule()
    {
        $this->lowLevelInterface->doSomething();
    }
}

// Sinif adlandırması və düzgün tərtibat
class Telefon
{
    // Üzvlər və kapsullama
    private $marka;
    private $model;

    // Metodlar və miras alma
    public function __construct($marka, $model)
    {
        $this->marka = $marka;
        $this->model = $model;
    }

    public function telefonuGoster()
    {
        return "Telefon: " . $this->marka . " " . $this->model;
    }
}
