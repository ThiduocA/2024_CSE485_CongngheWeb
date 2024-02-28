<?php
$products = [
    [
        "img" => "assets/img/chair.png",
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "img" => "assets/img/chair.png",
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "img" => "assets/img/chair.png",
        "id" => 4,
        "name" => "Chair",
        "price" => 30,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "img" => "assets/img/chair.png",
        "id" => 4,
        "name" => "Table",
        "price" => 50,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "img" => "assets/img/chair.png",
        "id" => 5,
        "name" => "Pencil",
        "price" => 73,
        "description" => "A comfortable and stylish Jean."
    ],
    // ... add more products 
];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="products-list">
        <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <div class="product-img">
                <img src="<?= $product['img'] ?>" alt="">
            </div>
            <div class="product-name">
                <?= $product['name'] ?>
            </div>
            <div class="product-price">
                <p>
                    $
                    <?= $product['price'] ?>
                </p>
            </div>
            <div class="product-description">
                <p>
                    <?= $product['description'] ?>
                </p>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
        <a href="?page=<?= $currentPage - 1 ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $totalPages): ?>
        <span class="active">
            <?= $i ?>
        </span>
        <?php else: ?>
        <a href="?page=<?= $i ?>">
            <?= $i ?>
        </a>
        <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?= $currentPage + 1 ?>">Next</a>
        <?php endif; ?>
    </div>
</body>

</html>