<?php


class product {
    public $name;
    public $id;
    public $description;
    public $price;
    public $photo;
    //public $tags;

    public function __construct(string $name,int $id,string $description,float $price,string $photo){
        $this->name = $name;
        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
        $this->photo = $photo;
        //$this->tags = $tags;
    }
}
?>