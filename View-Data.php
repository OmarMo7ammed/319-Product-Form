<?php
session_start();
    // <-- Validate Request_Method -->
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        $$key = trim(htmlspecialchars(htmlentities($value)));
    }
    $errors = [];
    // <-- validate Inputs -->
    if (empty($name)) {
        $errors['error_name'] = 'Name is required';
    } elseif (strlen($name) < 3) {
        $errors['error_name'] = 'Name Must be at least 3 characters';
    } elseif (is_numeric($name)) {
        $errors['error_name'] = 'Name Must be a string';
    }

    if (empty($description)) {
        $errors['error_description'] = 'Description is required';
    } elseif (strlen($description) < 3) {
        $errors['error_description'] = 'Description Must be at least 3 characters';
    } elseif (is_numeric($description)) {
        $errors['error_description'] = 'Description Must be a string';
    }

    if (empty($price)) {
        $errors['error_price'] = 'Price is required';
    } elseif ($price <= 0) {
        $errors['error_price'] = 'Price Must be at least 1';
    }

    if (empty($discount)) {
        $errors['error_discount'] = 'Discount is required';
    } elseif ($discount < 0) {
        $errors['error_discount'] = 'Discount Must be at least 0';
    } elseif ($discount > 100) {
        $errors['error_discount'] = 'Discount Must be less than 100';
    }

    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_error = $image['error'];
    $image_size = $image['size'];
    $image_type = $image['type'];

    $allowed_extentions = ['jpg', 'jpeg','png'];
    $allowed_mime_types = ['image/jpeg','image/png'];

    if (empty($image_name)) {
        $errors['error_image'] = 'Image Is Required';
    } else {
        $arrayName = explode('.', $image_name);
        $extentionInRequest = end($arrayName);
        if (!in_array($extentionInRequest, $allowed_extentions)) {
            $errors['error_image'] = 'Not Allowed Extension';
        } else {
            $mimeType = mime_content_type($image_tmp_name);
            if (!in_array($mimeType, $allowed_mime_types)) {
                $errors['error_image'] = 'Not Allowed Mime Type';
            } else {
                if ($image_size > 20000) {
                    $errors['error_image'] = 'Not Allowed Size';
                } else {
                    $finalName = rand(100000, 200000000) . time() . '.' . $extentionInRequest;
                    move_uploaded_file($image_tmp_name, 'images/' . $finalName);
                }
            }
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location:Form-Data.php');
        die;
    }
} else {
    $_SESSION['error_method'] = 'Not Allowed Method';
    header('Location:Form-Data.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $description ?></td>
                <td><?php echo $price ?></td>
                <td><?php echo $discount ?></td>
                <td>
                    <img src="<?php echo 'images/' . $finalName ?>" alt="">
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>