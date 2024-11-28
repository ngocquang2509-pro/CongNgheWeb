<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
    <h1 class="text-center text-danger my-3">Danh sách tài khoản</h1>
    <?php
    // Đường dẫn file CSV
    $csvFile = 'users.csv'; // Đổi 'users.csv' thành tên file thực tế của bạn

    // Kiểm tra file có tồn tại không
    if (file_exists($csvFile)) {
        echo '<table class="table">';
        echo '<tr>
                <th>Username</th>
                <th>Password</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>City</th>
                <th>Email</th>
                <th>Course</th>
              </tr>';
        
        // Mở file và đọc nội dung
        $file = fopen($csvFile, 'r');
        
        // Bỏ qua dòng tiêu đề
        fgetcsv($file);

        // Đọc từng dòng
        while (($line = fgetcsv($file)) !== false) {
            echo '<tr>';
            foreach ($line as $cell) {
                echo '<td>' . htmlspecialchars($cell) . '</td>';
            }
            echo '</tr>';
        }
        
        fclose($file);
        echo '</table>';
    } else {
        echo '<p>File CSV không tồn tại.</p>';
    }
    ?>
</body>
</html>
