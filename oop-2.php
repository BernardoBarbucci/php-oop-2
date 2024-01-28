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

// OBJECTS

// DogToy
$dogToys = [
    new DogToy("Squeaky Bone", "PetFun", "Rubber", "All", true, "High", "Interactive", true, "Medium"),
    new DogToy("Tug-of-War Rope", "PlayfulPets", "Cotton", "Adult", true, "High", "Durable", "Tug-of-War", "Large"),
];


// CatToy

$catToys = [
    new CatToy("Feather Teaser", "PlayfulCats", "Plastic", "All", true, "Medium", "Interactive", true, "Multi-color"),
    new CatToy("Catnip Mouse", "CozyCats", "Plush", "Kitten", true, "Low", "Soft", false, "Gray"),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/5bf3821641.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <header>
        <section class="text-white text-center my-4">
            <h1>
                <i class="fa-solid fa-paw"></i> Pet Shop <i class="fa-solid fa-paw"></i>
            </h1>
        </section>
    </header>

    <main>
        <section class="container-fluid">
            <div class="mb-4">
                <select class="form-select border border-warning ms-1" aria-label="Default select example"
                    style="width: 20rem;">
                    <option selected>Select a pet Type</option>
                    <option value="1">Dog</option>
                    <option value="2">Cat <i class="fa-solid fa-cat"></i></option>
                </select>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row p-3">
                <?php foreach ($dogToys as $dogToy) : ?>
                <div class="card m-2 " style="width: 18rem;">
                    <!-- Immagine: <img src="<?php echo $dogToy->imageUrl; ?>" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dogToy->name; ?> <i class="fa-solid fa-dog"></i></h5>
                        <p class="card-text"><?php echo $dogToy->description; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: $<?php echo $dogToy->price; ?></li>
                        <li class="list-group-item">Brand: <?php echo $dogToy->brand; ?></li>
                        <li class="list-group-item">Type: <?php echo $dogToy->type; ?></li>
                        <li class="list-group-item">Age Group: <?php echo $dogToy->ageGroup; ?></li>
                        <li class="list-group-item">Interactive: <?php echo $dogToy->interactive ? 'Yes' : 'No'; ?></li>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- da fare lo stesso per cat  -->

        </section>
    </main>

</body>

</html>