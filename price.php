<?php
class Item
{
    private $name;
    public $price;
    function __construct(
        $name = "item",
        $code = 0,
        $price = 0
    ) {
        $this->name = $name;
        $this->code = $code;
    }
    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }
}

class PriceItem extends Item{

    function __construct(
        $name,
        $code,
        $price
    ) {
        parent::__construct( //kaya pwede private name dahil tinawag parent constructor
            $name,
            $code
        );
        $this->price = $price;
    }
    function getName()
    {
        return "(price)" . parent::getName() . parent::getPrice();
    }
}
$item = new PriceItem("widget", 5442, 5.20);
print $item->getName();
// outputs "(price) widget5.2"
