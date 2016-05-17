<?php

if (isset($_GET['id'])) {
    Category::deletePhone($_GET['id']);
    Category::delete($_GET['id']);
}

header('Location: admin?category');

 ?>
