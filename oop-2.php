<?php
class ITEMS
{
    // variabili 
    public $name;
    public $price;
    public $category;
    public $material;
    public $size;
    public $brand;
    public $quantityInStock;
    public $description;
    public $imageUrl;
    public $petmaterial;

    // construct 
    public function __construct($name, $price, $category, $material, $size, $brand, $petmaterial)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->material = $material;
        $this->size = $size;
        $this->brand = $brand;
        $this->petmaterial = $petmaterial;
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

// // classe estesa per cucce DOG 
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

// DogToy
$dogToys = [
    new DogToy("Squeaky Bone", "19.99", "Rubber", "All", true, "High", "Interactive", true, "Medium"),
    new DogToy("Tug-of-War Rope", "14.99", "Cotton", "Adult", true, "High", "Durable", "Tug-of-War", "Large"),
    new DogToy("Chew Ball", "9.99", "Rubber", "Puppy", true, "Medium", "Chewable", "Medium", "Fetch"),
    new DogToy("Flying Disc", "12.99", "Plastic", "All", true, "High", "Durable", "Fetch", "Large"),
    new DogToy("Plush Squeaky Toy", "8.99", "Plush", "All", false, "Low", "Soft", "Not Chewable", "Small"),
    new DogToy("Puzzle Toy", "17.99", "Plastic", "Adult", false, "Medium", "Interactive", "Moderate", "Puzzle Solving"),
];


// CatToy
$catToys = [
    new CatToy("Feather Teaser", "9.99", "Plastic", "All", true, "Medium", "Interactive", true, "Multi-color"),
    new CatToy("Catnip Mouse", "12.99", "Plush", "Kitten", true, "Low", "Soft", false, "Gray"),
    new CatToy("Interactive Laser Toy", "14.99", "Plastic", "All", false, "Medium", "Interactive", "Moderate", "Laser"),
    new CatToy("Scratching Post", "24.99", "Cardboard", "All", false, "High", "Durable", "Not Applicable", "Brown"),
    new CatToy("Tunnel Toy", "19.99", "Fabric", "All", false, "Low", "Soft", "Not Applicable", "Blue"),
    new CatToy("Ball of Yarn", "7.99", "Yarn", "All", false, "Low", "Soft", "Not Chewable", "Various Colors"),
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

?>

<!DOCmaterial html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Shop</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                    <select class="form-select border border-warning ms-2" aria-label="Default select example" style="width: 15rem;">
                        <option selected>Select a pet material</option>
                        <option value="1">Dog</option>
                        <option value="2">Cat</option>
                    </select>
                </div>
            </section>
            <section class="container-fluid">
                <div class="row p-3 d-flex justify-content-center">
                    <!-- dog items -->
                    <?php foreach ($dogToys as $dogToy) : ?>
                        <div class="card m-2 bg-primary" style="width: 18rem;">
                            <!-- Immagine: <img src="<?php echo $dogToy->imageUrl; ?>" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $dogToy->name; ?> <i class="fa-solid fa-dog"></i></h5>
                                <p class="card-text"><?php echo $dogToy->description; ?></p>
                            </div>
                            <ul class="list-group list-group-flush pb-3 rounded">
                                <li class="list-group-item">Price: $<?php echo $dogToy->price; ?></li>
                                <li class="list-group-item">Brand: <?php echo $dogToy->brand; ?></li>
                                <li class="list-group-item">Material: <?php echo $dogToy->material; ?></li>
                                <li class="list-group-item">Age Group: <?php echo $dogToy->ageGroup; ?></li>
                                <li class="list-group-item">Interactive: <?php echo $dogToy->interactive ? 'Yes' : 'No'; ?>
                                </li>
                                <li class="list-group-item">Durability: <?php echo $dogToy->durability; ?></li>
                                <li class="list-group-item">Play Style: <?php echo $dogToy->playStyle; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>

                    <!-- cat items  -->
                    <?php foreach ($catToys as $catToy) : ?>
                        <div class="card m-2 bg-success" style="width: 18rem;">
                            <!-- Immagine: <img src="<?php echo $catToy->imageUrl; ?>" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $catToy->name; ?> <i class="fa-solid fa-cat"></i></h5>
                                <p class="card-text"><?php echo $catToy->description; ?></p>
                            </div>
                            <ul class="list-group list-group-flush pb-3 rounded">
                                <li class="list-group-item">Price: $<?php echo $catToy->price; ?></li>
                                <li class="list-group-item">Brand: <?php echo $catToy->brand; ?></li>
                                <li class="list-group-item">Material: <?php echo $catToy->material; ?></li>
                                <li class="list-group-item">Age Group: <?php echo $catToy->ageGroup; ?></li>
                                <li class="list-group-item">Interactive: <?php echo $catToy->interactive ? 'Yes' : 'No'; ?>
                                </li>
                                <li class="list-group-item">Durability: <?php echo $catToy->durability; ?></li>
                                <li class="list-group-item">Play Style: <?php echo $catToy->playStyle; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>

                    <!-- dog beds -->
                    <?php foreach ($dogBeds as $dogBed) : ?>
                        <div class="card m-2 bg-danger" style="width: 18rem;">
                            <!-- Immagine: <img src="<?php echo $dogBed->imageUrl; ?>" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $dogBed->name; ?> <i class="fa-solid fa-dog"></i></h5>
                                <p class="card-text"><?php echo $dogBed->description; ?></p>
                            </div>
                            <ul class="list-group list-group-flush pb-3 rounded">
                                <li class="list-group-item">Price: $<?php echo $dogBed->price; ?></li>
                                <li class="list-group-item">Brand: <?php echo $dogBed->brand; ?></li>
                                <li class="list-group-item">Material: <?php echo $dogBed->material; ?></li>
                                <li class="list-group-item">Brand: <?php echo $dogBed->brand; ?></li>
                                <li class="list-group-item">Design: <?php echo $dogBed->design; ?></li>
                                <li class="list-group-item">Washable: <?php echo $dogBed->washable; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>

                    <!-- cat beds -->


                </div>
            </section>
        </main>

    </body>

    </html>