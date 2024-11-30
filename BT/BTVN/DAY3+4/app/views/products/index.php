<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="../../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        
        <div class="bg-dark navbar p-4">
            <h3 class="text-light">Quản Lý Sản Phẩm</h3>
            <div class="">
            <a href="index.php?controller=product&action=create" class="btn btn-success"><i class="fa-solid fa-circle-plus mx-2"></i><span class="mx-2">Thêm sản phẩm mới</span></a>
            <a href="#" class="btn btn-danger"><i class="fa-solid fa-circle-minus mx-2"></i><span class="mx-2">Xóa hết sản phẩm</span></a>
            </div>
        </div>
        <h1 class="text-center text-danger mt-3">Danh sách sản phẩm</h1>
       
        <div class="row">
            <?php foreach ($products as $index => $product): ?>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card h-100">
                        <!-- Ảnh -->
                        <div class="card-img-container">
                            <img src="<?php echo $product['urlImage']; ?>" class="card-img-top img-fluid" alt="Product Image">
                        </div>
                        <!-- Nội dung -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($index + 1) . '. ' . $product['name']; ?></h5>
                            <p class="card-text"><?php echo $product['price']; ?></p>
                        </div>
                        <!-- Nút -->
                        <div class="buttons text-center mb-3">
                            <a class="btn btn-warning mx-2" href="index.php?controller=product&action=update&id=<?php echo $product['id']; ?>">Sửa</a>
                            <a class="btn btn-danger mx-2" href="index.php?controller=product&action=delete&id=<?php echo $product['id']; ?>">Xóa</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </div>
</body>
</html>
