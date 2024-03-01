<<<<<<< HEAD
<?php 
    $products = [
        [
            'img'=>"image/Tshirt_noun_001_18267_2.jpg",
            'id'=>1,
            'name'=>"t-shirt",
            'price'=>14,
            "decription"=>"a comfortable t-shirt"


        ],
        [
            'img'=>"image/Tshirt_noun_001_18267_2.jpg",
            'id'=>2,
            'name'=>"s-shirt",
            'price'=>15,
            "decription"=>"a comfortable s-shirt"
        ],
        [
            'img'=>"image/Tshirt_noun_001_18267_2.jpg",
            'id'=>3,
            'name'=>"shirt",
            'price'=>15,
            "decription"=>"a comfortable shirt"

        ],
        [
            'img'=>"image/Tshirt_noun_001_18267_2.jpg",
            'id'=>4,
            'name'=>"shirt",
            'price'=>15,
            "decription"=>"a comfortable shirt"

        ]
    ];
    $itemperpage = 3;
    $totalPages = ceil(count($products)/$itemperpage);
    $currentPage = isset($_GET['page']) ? $_GET['page']:3;
    $currentPageitems = array_slice($products,($currentPage-1)*$itemperpage,$itemperpage);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row product-list justify-content-center m-4">
               <?php foreach ($currentPageitems as $product ): ?>
                
                <div class="product col-md-4 card m-1" style="width: 18rem">
                    <img src="<?=$product['img']?>" class="card-img-top" alt="" style="width:100%"> 
                    <div class="card-body">
                        <h5 class="card-title">id sản phẩm:<?= $product['id']?></h5>
                        <p class="card-text m-0">Tên sản phẩm:<?= $product['name']?></p>
                        <p class="card-text m-0">Giá sản phẩm:<?= $product['price']?></p>
                        <p class="card-text">Miêu tả sản phẩm:<?= $product['decription']?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="container">
                <ul class="pagination" style="justify-content: center;">
                    <?php if($currentPage > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $currentPage - 1;?>">Previous</a>
                        </li>
                    <?php endif;?>
                    <?php for($i = 1 ;$i<$totalPages;$i++): ?>
                        <?php if($i = $currentPage): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $i;?>"><?=$i?></a>
                            </li>
                        <?php endif;?>  
                    <?php endfor; ?>
                    <?php if($currentPage<4): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page<?= $currentPage+1;?>">Next</a>
                    </li>
                    <?php endif;?>
                </ul>
        </div>
        
    </section>



</body>
</html>
=======
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
>>>>>>> 113d5a9dffb26ff0de70f83d61655e1b36c4e675
