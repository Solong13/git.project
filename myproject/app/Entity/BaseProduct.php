<?php
namespace App\Entity;

abstract class BaseProduct
{
    static  private  $statId = 1;
    private $id;
    private $name;
    private $cost;
    private $Brand;

    public function  __construct($name, $cost, $id, $Brand)
    {
        $this->id =BaseProduct::$statId++;
        $this->name = $name;
        $this->cost = $cost;
        $this->Brand = $Brand;
    }
}

?>