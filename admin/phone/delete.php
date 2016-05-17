<?php

if (isset($_GET['id'])) {
    Phone::delete($_GET['id']);
}

header('Location: admin?phone');

 ?>
