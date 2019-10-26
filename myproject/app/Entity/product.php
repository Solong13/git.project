<?php
namespace App;
class product
{
    public $id;
    public $name;
    public $cost;
    public $Brand;


    public function __construct($id, $name, $cost, $Brand);
{
$this->id = $id;
$this->name = $name;
$this->cost = $cost;
$this->Brand = $Brand;
}
    public function convertToArray()
{
    return[
      'id' => $this->id,
       'name' => $this->name,
        'cost' => $this->cost,
        'Brand' => $this->Brand,
    ];
}
}
?>