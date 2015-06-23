<?php

/**
 * Class ShopProduct_Sweet
 */
abstract class ShopProduct_Sweet extends ShopProduct
{
    /**
     * @var
     */
    protected $color;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
