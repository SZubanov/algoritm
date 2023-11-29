<?php

namespace Patterns\Adapter;

class Adapter implements GraphicInterface
{
    private ThirdPartyLibrary $thirdPartyLibrary;

    public function __construct(ThirdPartyLibrary $thirdPartyLibrary)
    {
        $this->thirdPartyLibrary = $thirdPartyLibrary;
    }

    public function draw(): void
    {
        $this->thirdPartyLibrary->drawImage();
    }
}