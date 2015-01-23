<?php
namespace Navigation4\JetBrains\Customers;

class Customer implements ICustomer
{
    /** @var string */
    protected $_name;

    /** @var double */
    protected $_discount;

    /**
     * @param $name string
     * @param $discount double
     */
    function __construct($name, $discount)
    {
        $this->_name = $name;
        $this->_discount = $discount;
    }

    /**
     * @param $discount double
     */
    public function setDiscount($discount)
    {
        $this->_discount = $discount;
    }

    /**
     * @return double
     */
    public function getDiscount()
    {
        return $this->_discount;
    }

    /**
     * @param $name string
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }
}