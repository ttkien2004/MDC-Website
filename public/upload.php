<?php
$message = "";
$imagePath = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $fileName = basename($_FILES['image']['name']);
        $targetFile = $targetDir . $fileName;

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['image']['type'], $allowedTypes)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                // Lưu thông báo & đường dẫn vào session
                session_start();
                $_SESSION['message'] = "Upload thành công!";
                $_SESSION['imagePath'] = $targetFile;
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                $message = "Lỗi khi upload file.";
            }
        } else {
            $message = "Chỉ cho phép JPG, PNG, GIF.";
        }
    } else {
        $message = "Chưa chọn file hoặc file bị lỗi.";
    }
}

// Lấy dữ liệu từ session sau khi redirect
session_start();
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
if (isset($_SESSION['imagePath'])) {
    $imagePath = $_SESSION['imagePath'];
    unset($_SESSION['imagePath']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Ảnh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .upload-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        input[type="file"] {
            margin: 10px 0;
        }
        button {
            padding: 8px 15px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        img {
            max-width: 200px;
            border-radius: 10px;
            margin-top: 15px;
        }
        p {
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>Upload Ảnh</h2>
    <?php if ($message): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
    
    <?php if ($imagePath): ?>
        <img src="<?= htmlspecialchars($imagePath) ?>" alt="Uploaded Image">
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required><br>
        <button type="submit">Upload</button>
    </form>
</div>

</body>
</html>
