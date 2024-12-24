<?php 
declare(strict_types=1);
function is_input_empty(string $car_name, string $model, int $price,array $photo): bool {
    return empty($car_name) || empty($model) || empty($price) || empty($photo);
}


function upload_file(string $targetdir, array $file): string {
    
    $fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($fileExt, $allowedExtensions)) {
        throw new Exception("Invalid file type. Allowed types: jpg, jpeg, png, gif.");
    }

    if ($file['size'] > 10 * 1024 * 1024) {
        throw new Exception("File size exceeds the limit of 2MB.");
    }

    $uniqueName = round(microtime(true) * 1000) . '.' . $fileExt;
    $targetFile = $targetdir . $uniqueName;

    if (!move_uploaded_file($file['tmp_name'], $targetFile)) {
        throw new Exception("Failed to upload the file.");
    }

    return $uniqueName;
}

?>

