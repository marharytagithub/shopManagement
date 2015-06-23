<?php

/**
 * Class Shop
 */
class Shop
{
    /**
     * @var
     */
    protected $customerName;

    /**
     * product object set
     *
     * @var
     */
    private $cart = array();

    /**
     * @param $customerName
     */
    public function __construct($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * add product to cart
     *
     * @param object $productOb
     * @return bool
     */
    public function addProduct($productOb)
    {
        $this->cart[] = $productOb;

        return true;
    }

    /**
     * @return bool
     */
    public function removeProduct()
    {
        $countProduct = count($this->cart);
        unset($this->cart[--$countProduct]);

        return true;
    }

    /**
     * @return int
     */
    public function countTotal()
    {
        $total = 0;
        foreach ($this->cart as $product) {
            $productPrice = $product->getPrice();
            $total += $productPrice;
        }

        return $total;
    }
}
