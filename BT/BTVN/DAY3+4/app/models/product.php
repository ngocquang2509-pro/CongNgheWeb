<?php
class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Lấy tất cả sản phẩm
    public function getAllProducts() {
        $query = "SELECT * FROM tb_product";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy sản phẩm theo ID
    public function getProductById($id) {
        $query = "SELECT * FROM tb_product WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm sản phẩm mới
    public function createProduct($data) {
        $query = "INSERT INTO tb_product (name, price, urlImage) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$data['name'], $data['price'], $data['urlImage']]);
    }

    // Cập nhật sản phẩm
    public function updateProductIMG($id, $data) {
        $query = "UPDATE tb_product SET name = ?, price = ?, urlImage = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$data['name'], $data['price'], $data['urlImage'], $id]);
    }

    public function updateProduct($id, $data) {
        $query = "UPDATE tb_product SET name = ?, price = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$data['name'], $data['price'], $id]);
    }

    // Xóa sản phẩm
    public function deleteProduct($id) {
        $query = "DELETE FROM tb_product WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}
?>
