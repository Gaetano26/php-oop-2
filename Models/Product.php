<?php


/**
 * Summary Class Product
 */
class Product
{
    public string $title;
    public int $price;
    public string $image;


    /**
     * constructor
     *
     * @param string $title
     * @param integer $price
     * @param string $image
     */
    public function __construct( string $title, int $price ,string $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;

    }
    
}

