<?php
include_once __DIR__ . '/objects/dog.php';
include_once __DIR__ . '/objects/cat.php';

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
                                <li class="list-group-item">Washable: <?php echo $dogBed->washable ? 'Yes' : 'No'; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>

                    <!-- cat beds -->
                    <?php foreach ($catBeds as $catBed) : ?>
                        <div class="card m-2 bg-info" style="width: 18rem;">
                            <!-- Immagine: <img src="<?php echo $catBed->imageUrl; ?>" class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $catBed->name; ?> <i class="fa-solid fa-cat"></i></h5>
                                <p class="card-text"><?php echo $catBed->description; ?></p>
                            </div>
                            <ul class="list-group list-group-flush pb-3 rounded">
                                <li class="list-group-item">Price: $<?php echo $catBed->price; ?></li>
                                <li class="list-group-item">Brand: <?php echo $catBed->brand; ?></li>
                                <li class="list-group-item">Material: <?php echo $catBed->material; ?></li>
                                <li class="list-group-item">Design: <?php echo $catBed->design; ?></li>
                                <li class="list-group-item">Washable: <?php echo $catBed->washable ? 'Yes' : 'No'; ?></li>
                                <li class="list-group-item">Orthopedic: <?php echo $catBed->orthopedic ? 'Yes' : 'No'; ?>
                                </li>
                                <li class="list-group-item">Bed Size: <?php echo $catBed->bedSize; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>

                </div>
            </section>
        </main>

    </body>

    </html>