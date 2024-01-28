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

    public function __construct($name, $price, $type, $size, $brand, $breed, $lifeStage, $weightRange, $chewable, $activityLevel)
    {
        // richiama il construct della classe parent 
        parent::__construct($name, $price, "Cani", $type, $size, $brand, "Cani");
        $this->breed = $breed;
        $this->lifeStage = $lifeStage;
        $this->weightRange = $weightRange;
        $this->chewable = $chewable;
        $this->activityLevel = $activityLevel;
    }
}


// classe estesa per gatto 
class CAT extends ITEMS
{
    public $color;
    public $indoor;
    public $hairLength;
    public $scratchingPost;
    public $hypoallergenic;

    public function __construct($name, $price, $type, $size, $brand, $color, $indoor, $hairLength, $scratchingPost, $hypoallergenic)
    {
        // richiama il construct della classe parent 
        parent::__construct($name, $price, "Gatti", $type, $size, $brand, "Gatti");
        $this->color = $color;
        $this->indoor = $indoor;
        $this->hairLength = $hairLength;
        $this->scratchingPost = $scratchingPost;
        $this->hypoallergenic = $hypoallergenic;
    }
}

// classe estesa per giochi per il cane 
class DogToy extends DOG
{
    public $ageGroup;
    public $material;
    public $interactive;
    public $durability;
    public $playStyle;

    public function __construct($name, $price, $type, $brand, $ageGroup, $material, $interactive, $durability, $playStyle)
    {
        parent::__construct($name, $price, $type, null, $brand, null, null, null, null, null);
        $this->ageGroup = $ageGroup;
        $this->material = $material;
        $this->interactive = $interactive;
        $this->durability = $durability;
        $this->playStyle = $playStyle;
    }
}

// classe estesa per giochi per il gatto 
class CatToy extends CAT
{
    public $ageGroup;
    public $material;
    public $interactive;
    public $durability;
    public $playStyle;

    public function __construct($name, $price, $type, $brand, $ageGroup, $material, $interactive, $durability, $playStyle)
    {
        parent::__construct($name, $price, $type, null, $brand, null, null, null, null, null);
        $this->ageGroup = $ageGroup;
        $this->material = $material;
        $this->interactive = $interactive;
        $this->durability = $durability;
        $this->playStyle = $playStyle;
    }
}

// // classe estesa per cucce DOG 
class DogBed extends DOG
{
    public $material;
    public $bedSize;
    public $washable;
    public $orthopedic;
    public $design;

    public function __construct($name, $price, $type, $brand, $material, $bedSize, $washable, $orthopedic, $design)
    {
        parent::__construct($name, $price, $type, null, $brand, null, null, null, null, null);
        $this->material = $material;
        $this->bedSize = $bedSize;
        $this->washable = $washable;
        $this->orthopedic = $orthopedic;
        $this->design = $design;
    }
}

// classe estesa per cucce CAT
class CatBed extends CAT
{
    public $material;
    public $bedSize;
    public $washable;
    public $orthopedic;
    public $design;

    public function __construct($name, $price, $type, $brand, $material, $bedSize, $washable, $orthopedic, $design)
    {
        parent::__construct($name, $price, $type, null, $brand, null, null, null, null, null);
        $this->material = $material;
        $this->bedSize = $bedSize;
        $this->washable = $washable;
        $this->orthopedic = $orthopedic;
        $this->design = $design;
    }
}
