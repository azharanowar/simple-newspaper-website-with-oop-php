<?php

require_once "vendor/autoload.php";

use App\classes\Category;
use App\classes\Post;

$category = new Category();
$categories = $category->getAllCategories();

$post = new Post();
$posts = $post->getAllPosts();


if (isset($_GET['page'])) {
    if ($_GET['page'] === 'home') {
        include "pages/home.php";
    }
}