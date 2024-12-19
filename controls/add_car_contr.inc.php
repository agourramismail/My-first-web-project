<?php 
declare(strict_types=1);
function is_input_empty(string $car_name, string $model, int $price, string $photo): bool {
    return empty($car_name) || empty($model) || empty($price) || empty($photo);
}