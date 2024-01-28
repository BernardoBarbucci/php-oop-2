<?php
class ITEMS
{
    // variabili 
    public $name;
    public $price;
    public $category;
    public $type;
    public $size;
    public $brand;
    public $quantityInStock;
    public $description;
    public $imageUrl;
    public $petType;

    // construct 
    public function __construct($name, $price, $category, $type, $size, $brand, $petType)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->size = $size;
        $this->brand = $brand;
        $this->petType = $petType;
    }
}

// classe estesa per cane 
class DOG extends ITEMS
{

    public $breed;
    public $lifeStage;
    public $weightRange;
    public $chewable;
    public $activityLevel;
}


// classe estesa per gatto 
class CAT extends ITEMS
{
    public $color;
    public $indoor;
    public $hairLength;
    public $scratchingPost;
    public $hypoallergenic;
}
