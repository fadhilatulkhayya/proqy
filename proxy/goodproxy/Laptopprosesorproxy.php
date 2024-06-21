<?php
include_once "Prosesorlaptop.php";

class LaptopProcessorProxy implements LaptopProcessor {
    private ?RealLaptopProcessor $reallaptopprocessor = null;
    private string $brand;
    private string $model;
    private float $clockSpeed;

    public function __construct(string $brand, string $model, float $clockSpeed) {
        $this->brand = $brand;
        $this->model = $model;
        $this->clockSpeed = $clockSpeed;
    }

    public function getSpecifications(): string {
        if ($this->reallaptopprocessor === null) {
            $this->reallaptopprocessor = new RealLaptopProcessor($this->brand, $this->model, $this->clockSpeed);
        }
        return $this->reallaptopprocessor->getSpecifications();
    }
}
?>
