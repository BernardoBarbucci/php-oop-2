<?php

// classe estesa per cane 
class DOG extends ITEMS
{
    public $breed;
    public $lifeStage;
    public $weightRange;
    public $chewable;
    public $activityLevel;

    public function __construct($name, $price, $material, $size, $brand, $breed, $lifeStage, $weightRange, $chewable, $activityLevel)
    {
        parent::__construct($name, $price, "Cani", $material, $size, $brand, "Cani");
        $this->breed = $breed;
        $this->lifeStage = $lifeStage;
        $this->weightRange = $weightRange;
        $this->chewable = $chewable;
        $this->activityLevel = $activityLevel;
    }
}

// classe estesa per giochi per il cane 
class DogToy extends DOG
{
    public $ageGroup;
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

// classe estesa per cucce DOG 
class DogBed extends DOG
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

// objects

// DogToy
$dogToys = [
    new DogToy("Squeaky Bone", "19.99", "Rubber", "All", true, "High", "Interactive", true, "Medium"),
    new DogToy("Tug-of-War Rope", "14.99", "Cotton", "Adult", true, "High", "Durable", "Tug-of-War", "Large"),
    new DogToy("Chew Ball", "9.99", "Rubber", "Puppy", true, "Medium", "Chewable", "Medium", "Fetch"),
    new DogToy("Flying Disc", "12.99", "Plastic", "All", true, "High", "Durable", "Fetch", "Large"),
    new DogToy("Plush Squeaky Toy", "8.99", "Plush", "All", false, "Low", "Soft", "Not Chewable", "Small"),
    new DogToy("Puzzle Toy", "17.99", "Plastic", "Adult", false, "Medium", "Interactive", "Moderate", "Puzzle Solving"),
];

// DogBed
$dogBeds = [
    new DogBed("Cozy Den", "49.99", "Plush", "Premium Pets", "Medium", true, false, "Modern Design"),
    new DogBed("OrthoComfort Bed", "64.99", "Memory Foam", "Comfort Paws", "Large", true, true, "Classic Design"),
    new DogBed("Elevated Cooling Bed", "29.99", "Mesh Fabric", "Cool Canines", "Small", true, true, "Portable"),
    new DogBed("Luxury Lounge", "79.99", "Faux Leather", "Pampered Pets", "Extra Large", true, true, "Elegant Style"),
    new DogBed("Outdoor Adventure Bed", "54.99", "Waterproof Nylon", "Active Pups", "Medium", true, true, "Outdoor Use"),
    new DogBed("Cuddler Nest", "39.99", "Soft Microfiber", "Snuggly Pets", "Small", true, true, "Cozy Design"),
    new DogBed("Heated Plush Bed", "89.99", "Heating Element", "Warm Whiskers", "Large", true, true, "Heated Bed"),
];
