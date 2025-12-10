<?php

class Book 
{
    // Properties
    private $title;
    private $author;
    private $year;
    
    public function __construct($title = "", $author = "", $year = 0) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    
    public function getDetails() 
    {
        return "Title: " . $this->title . 
               ", Author: " . $this->author . 
               ", Year: " . $this->year;
    }
   
    public function setTitle($title) 
    {
        $this->title = $title;
    }
    
    public function setAuthor($author) 
    {
        $this->author = $author;
    }
    
    public function setYear($year) 
    {
        $this->year = $year;
    }
    
    public function getTitle() 
    {
        return $this->title;
    }
    
    public function getAuthor() 
    {
        return $this->author;
    }
    
    public function getYear() 
    {
        return $this->year;
    }
}

echo "<h3>Method 1: Creating book with constructor parameters</h3>";
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
echo "Book 1 Details: " . $book1->getDetails() . "<br>";

echo "<h3>Method 2: Creating empty book and using setter methods</h3>";
$book2 = new Book();
$book2->setTitle("To Kill a Mockingbird");
$book2->setAuthor("Harper Lee");
$book2->setYear(1960);
echo "Book 2 Details: " . $book2->getDetails() . "<br>";

echo "<h3>Method 3: Modifying book properties using setter methods</h3>";
$book3 = new Book("Old Title", "Old Author", 2000);
echo "Original Book 3 Details: " . $book3->getDetails() . "<br>";

$book3->setTitle("1984");
$book3->setAuthor("George Orwell");
$book3->setYear(1949);
echo "Updated Book 3 Details: " . $book3->getDetails() . "<br>";

echo "<h3>Library of Books:</h3>";
$library = [
    new Book("Pride and Prejudice", "Jane Austen", 1813),
    new Book("The Catcher in the Rye", "J.D. Salinger", 1951),
    new Book("Harry Potter and the Philosopher's Stone", "J.K. Rowling", 1997)
];

?>