<?php
include_once "Prosesorlaptop.php";

class RealLaptopProcessor implements LaptopProcessor {
    private string $brand;
    private string $model;
    private float $clockSpeed;

    public function __construct(string $brand, string $model, float $clockSpeed) {
        $this->brand = $brand;
        $this->model = $model;
        $this->clockSpeed = $clockSpeed;
    }

    public function getSpecifications(): string {
        return "Processor: $this->brand $this->model, Clock Speed: $this->clockSpeed GHz";
    }
}
?>
