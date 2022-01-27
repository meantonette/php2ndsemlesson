<?php
class Item {
private $name;
function __construct(
$name="item", $code=0 ) {
$this->name = $name;
$this->code = $code;
}
function getName () {
return $this->name;
}
}
class PriceItem extends Item {
private $price;
function __construct( $name,
$code, $price ) {
parent::__construct(
$name, $code );
$this->price = $price;
}
function getName() {
return "(price)
".parent::getName();
}
}
$item = new PriceItem
("widget", 5442, 5.20);
print $item->getName ();
// outputs "(price) widget"
?>