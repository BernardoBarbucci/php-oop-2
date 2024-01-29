<?php

// classe estesa per gatto 
class CAT extends ITEMS
{
    public $color;
    public $indoor;
    public $hairLength;
    public $scratchingPost;
    public $hypoallergenic;

    public function __construct($name, $price, $material, $size, $brand, $color, $indoor, $hairLength, $scratchingPost, $hypoallergenic)
    {
        parent::__construct($name, $price, "Gatti", $material, $size, $brand, "Gatti");
        $this->color = $color;
        $this->indoor = $indoor;
        $this->hairLength = $hairLength;
        $this->scratchingPost = $scratchingPost;
        $this->hypoallergenic = $hypoallergenic;
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

    public function __construct($name, $price, $material, $brand, $ageGroup, $interactive, $durability, $playStyle)
    {
        parent::__construct($name, $price, $material, null, $brand, null, null, null, null, null);
        $this->ageGroup = $ageGroup;
        $this->interactive = $interactive;
        $this->durability = $durability;
        $this->playStyle = $playStyle;
    }
}

// classe estesa per cucce CAT
class CatBed extends CAT
{
    public $bedSize;
    public $washable;
    public $orthopedic;
    public $design;

    public function __construct($name, $price, $material, $brand, $bedSize, $washable, $orthopedic, $design)
    {
        parent::__construct($name, $price, $material, null, $brand, null, null, null, null, null);
        $this->bedSize = $bedSize;
        $this->washable = $washable;
        $this->orthopedic = $orthopedic;
        $this->design = $design;
    }
}

// OBJECTS


// CatToy
$catToys = [
    new CatToy("Feather Teaser", "9.99", "Plastic", "All", true, "Medium", "Interactive", true, "Multi-color"),
    new CatToy("Catnip Mouse", "12.99", "Plush", "Kitten", true, "Low", "Soft", false, "Gray"),
    new CatToy("Interactive Laser Toy", "14.99", "Plastic", "All", false, "Medium", "Interactive", "Moderate", "Laser"),
    new CatToy("Scratching Post", "24.99", "Cardboard", "All", false, "High", "Durable", "Not Applicable", "Brown"),
    new CatToy("Tunnel Toy", "19.99", "Fabric", "All", false, "Low", "Soft", "Not Applicable", "Blue"),
    new CatToy("Ball of Yarn", "7.99", "Yarn", "All", false, "Low", "Soft", "Not Chewable", "Various Colors"),
];

// CatBed
$catBeds = [
    new CatBed("Kitty Paradise", "34.99", "Felt", "Purrfect Haven", "Small", true, false, "Tree Design"),
    new CatBed("Hammock Lounger", "19.99", "Canvas", "Relaxing Cats", "Medium", true, true, "Hammock Style"),
    new CatBed("Cozy Igloo", "29.99", "Plush", "Happy Tails", "Small", true, true, "Igloo Shape"),
    new CatBed("Window Perch", "24.99", "Suction Cups", "Urban Felines", "Small", true, true, "Window Mounted"),
    new CatBed("Luxury Cat Tower", "69.99", "Wood", "Royal Cats", "Large", true, true, "Multi-level Tower"),
    new CatBed("Cute Kitty Cave", "14.99", "Felt", "Adorable Kittens", "Small", true, false, "Cave Design"),
    new CatBed("Heated Cozy Spot", "49.99", "Heating Pad", "Warm Whiskers", "Medium", true, true, "Heated Bed"),
];
