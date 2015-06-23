<?php

/**
 * Class ShopProduct
 */
abstract class ShopProduct
{
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $price;

    /**
     * @param $name
     * @param $price
     */
    public function __construct($name, $price)
    {
        if ($this->validatePrice($price)) {
            $this->name = $name;
            $this->price = $price;
        } else {
            echo "please, enter valid price";
        }
    }

    /**
     * @param $price
     * @return bool
     */
    private function validatePrice($price)
    {
        return is_float($price);
    }

    /**
     * @return bool
     */
    public function getPrice()
    {
        return $this->price;
    }
}
