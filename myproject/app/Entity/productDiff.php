<?php
namespace App\Entity;
    class ProductDiff
    {
        protected  $id;



        public function change($bool = true)
        {
            if(!$bool){
                echo new \Exception(message 'Must be true');
            }
        }


    }


?>