<?php
include_once __DIR__ . '/../Traits/Weight.php';
/**
 * Summary Class Category
 */
class Category
{

    use Weight;
    public string $type;

    public string $genre;

    /**
     * Constructor
     *
     * @param string $type
     * @param string $genre
     */
    public function __construct(string $type, string $genre, string $weight)
    {

        $this->type = $type;
        $this->genre = $genre;
        $this->weight = $weight;
    }

    
}