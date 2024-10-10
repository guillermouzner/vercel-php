<?php 

// config manager
// si se definen las variables en ENV, las toma de ahi, si no del array configData

class Configuration {
    private $config;

    public function __construct(array $config) {
        $this->config = $config;
    }

    public function getValue(string $key) {
        return $_ENV[$key] ?? $this->config[$key];
    }
}
