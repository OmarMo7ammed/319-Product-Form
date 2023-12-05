<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product - Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                     <div class="mb-3">
                    <h1>Product Information</h1>
                    <?php if (isset($_SESSION['error_method'])) : ?>
                    <div class="alert alert-danger">
                          <?php
                          echo $_SESSION['error_method'];
                          unset($_SESSION['error_method']);
                          ?>
                    </div>
                    <?php endif; ?>
                <form action="View-Data.php" method="POST" enctype="multipart/form-data">
                    <label for="">Name :</label><br>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name">
                    <?php if (isset($_SESSION['errors']['error_name'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_name'];
                        unset($_SESSION['errors']['error_name']);
                        ?>
                    </div>
                    <?php endif; ?>
                    </div>
                    <div class="mb-3">
                    <label for="">Description :</label><br>
                    <textarea class="form-control" name="description" rows="3" placeholder="Enter product description"></textarea>
                    <?php if (isset($_SESSION['errors']['error_description'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_description'];
                        unset($_SESSION['errors']['error_description']);
                        ?>
                    </div>
                    <?php endif; ?>
                    </div>
                    <div class="mb-3">
                    <label for="">Price :</label><br>
                    <input type="text" name="price" class="form-control" placeholder="Enter product price">
                    <?php if (isset($_SESSION['errors']['error_price'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_price'];
                        unset($_SESSION['errors']['error_price']);
                        ?>
                    </div>
                    <?php endif; ?>
                    </div>
                    <div class="mb-3">
                    <label for="">Discount :</label><br>
                    <input type="text" name="discount" class="form-control" placeholder="Enter product discount">
                    <?php if (isset($_SESSION['errors']['error_discount'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_discount'];
                        unset($_SESSION['errors']['error_discount']);
                        ?>
                    </div>
                    <?php endif; ?>
                    </div>
                    <div class="mb-3">
                    <label for="">Image :</label><br>
                    <input type="file" name="image" class="form-control">
                    <?php if (isset($_SESSION['errors']['error_image'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_image'];
                        unset($_SESSION['errors']['error_image']);
                        ?>
                    </div>
                    <?php endif; ?>
                    </div>
                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>