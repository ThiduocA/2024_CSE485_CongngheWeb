<?php
    include 'main.php';
    $products = [
        [
            "id" => 1,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt.",
            "image" => "images/image1.jpg"
        ],
        [
            "id" => 2,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "image" => "images/image2.jpg"
        ],
        [
            "id" => 3,
            "name" => "Stylo Stool",
            "price" => 300.00,
            "description" => "A Chair.",
            "image" => "images/image3.jpg"
        ],
        [
            "id" => 4,
            "name" => "Stylish Wooden Chair",
            "price" => 349.00,
            "description" => "A Chair.",
            "image" => "images/image4.jpg"
        ],
        [
            "id" => 5,
            "name" => "Wooden Bathroom Set",
            "price" => 400.00,
            "description" => "Wooden.",
            "image" => "images/image5.jpg"
        ],
        [
            "id" => 6,
            "name" => "Waterproof Emil Backpack",
            "price" => 99.00,
            "description" => "Backpack.",
            "image" => "images/image6.jpg"
        ],
        [
            "id" => 7,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "image" => "images/image2.jpg"
        ],
        [
            "id" => 8,
            "name" => "Waterproof Emil Backpack",
            "price" => 99.00,
            "description" => "Backpack.",
            "image" => "images/image6.jpg"
        ],
        [
            "id" => 9,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt.",
            "image" => "images/image1.jpg"
        ],
        [
            "id" => 10,
            "name" => "Waterproof Emil Backpack",
            "price" => 99.00,
            "description" => "Backpack.",
            "image" => "images/image6.jpg"
        ],
        [
            "id" => 11,
            "name" => "Wooden Bathroom Set",
            "price" => 400.00,
            "description" => "Wooden.",
            "image" => "images/image5.jpg"
        ],
        [
            "id" => 12,
            "name" => "Waterproof Emil Backpack",
            "price" => 99.00,
            "description" => "Backpack.",
            "image" => "images/image6.jpg"
        ],
        [
            "id" => 13,
            "name" => "Waterproof Emil Backpack",
            "price" => 99.00,
            "description" => "Backpack.",
            "image" => "images/image5.jpg"
        ],
    ];

    $itemsPerPage = 5; 
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h2><?php echo $product['name']; ?></h2>
            <p>Price: $<?php echo $product['price']; ?></p>
            <p><?php echo $product['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
