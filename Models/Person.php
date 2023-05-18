<?php
include_once __DIR__ . '/../Traits/Weight.php';
/**
 * Summary Class Person
 */
class Person
{

    use Weight;
    public string $altezza;

    

    /**
     * Constructor
     *
     * @param string $altezza
     */
    public function __construct(string $altezza)
    {

        $this->altezza = $altezza;

    }

    
}