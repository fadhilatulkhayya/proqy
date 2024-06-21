<?php
// Tidak menggunakan interface atau class terpisah untuk proxy dan real object
class LaptopProcessor {
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

class LaptopProcessorProxy {
    private LaptopProcessor $realLaptopProcessor;

    public function __construct(string $brand, string $model, float $clockSpeed) {
        $this->realLaptopProcessor = new LaptopProcessor($brand, $model, $clockSpeed);
    }

    public function getSpecifications(): string {
        return $this->realLaptopProcessor->getSpecifications();
    }
}

// Penggunaan proxy yang tidak memberikan manfaat tambahan
$proxyProcessor = new LaptopProcessorProxy("Intel", "i5-13450H", 3.0);
echo $proxyProcessor->getSpecifications();
?>
