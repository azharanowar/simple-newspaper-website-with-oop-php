<?php

namespace App\classes;

class Category
{
    public $categories;

    public function __construct() {
        $this->categories = [
            0   =>  [
                'id'    =>  1,
                'name'  =>  "National",
            ],
            1   =>  [
                'id'    =>  2,
                'name'  =>  "International",
            ],
            2   =>  [
                'id'    =>  3,
                'name'  =>  "Politics",
            ],
            3   =>  [
                'id'    =>  4,
                'name'  =>  "Economics",
            ],
            4   =>  [
                'id'    =>  5,
                'name'  =>  "Sports",
            ],
            5   =>  [
                'id'    =>  6,
                'name'  =>  "Science & Technology",
            ],
        ];
    }

    public function getAllCategories() {
        return $this->categories;
    }
}