<?php

namespace  FlyBehavior


class FlyBehavior
{
    public string $fast;
    public string $slowly;
    public string $cantFly;
    public string $transport;

   public function __construct($fast, $slowly, $cantFly, $transport);
{
    $this->fast = $fast;
    $this->slowly = $slowly;
    $this->cantFly = $cantFly;
    $this->transport = $transport;
}

public function display():string
{
    return 'fast: ' . $this->fast . ', slowly: ' . $this->slowly . ', cantFly: ' . $this->cantFly . ',transport: ' . $this->transport;
}
}

