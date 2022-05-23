<?php

namespace App;


class Apple
{
    private string $property;

    /**
     * Apple constructor.
     */
    public function __construct()
    {
        $this->property = "apple";
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }
}
