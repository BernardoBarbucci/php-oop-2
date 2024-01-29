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

// filtraggio dei prodotti per dog e cat in base alla categoria selezionata nella select
function filterItemsByCategory($items, $category)
{
    return array_filter($items, function ($item) use ($category) {
        return strtolower($item->category) === strtolower($category);
    });
}

// seleziona categoria
$currentCategory = isset($_GET['category']) ? $_GET['category'] : 'all';

if ($currentCategory === 'dog') {
    $filteredToys = $DogToy;
    $filteredBeds = $DogBed;
} elseif ($currentCategory === 'cat') {
    $filteredToys === $CatToy;
    $filteredBeds === $CatBed;
} else {
    // mostra tutto di default
    $filteredToys === array_merge($DogToy, $CatToy);
    $filteredBeds === array_merge($CatToy, $CatBed);
}

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
                    <select class="form-select border border-warning ms-2" id="petCategory" aria-label="Default select example" style="width: 15rem;">
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