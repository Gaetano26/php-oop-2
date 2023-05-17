<?php
include __DIR__ . '/Product.php';
include __DIR__ . '/Category.php';
/**
 * Summary Class AnimalCategory
 */
class AnimalCategory extends Product
{
    public string $animal_type;

    public object $category;

    private $availableIcon = [
        'dog',
        'cat',
    ];

    

    public function __construct( string $title, int $price ,string $image, string $animal_type, Category $category)
    {
        parent::__construct($title, $price , $image);
        $this->animal_type = $animal_type;
        $this->category = $category;
    }

    public function getIcon()
    {
        if (in_array($this->animal_type, $this->availableIcon)) {
            return "<i class='ico fa-solid fa-$this->animal_type'></i>";
        } else {
            return "<span>Unavailable</span>";
        }
    }
}