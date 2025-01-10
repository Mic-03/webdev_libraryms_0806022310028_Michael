<?php
// Base Class: Book
class Book {
    protected $title;
    protected $author;
    protected $publicationYear;

    public function __construct($title, $author, $publicationYear) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }

    public function getDetails() {
        return "Title: {$this->title}, Author: {$this->author}, Year: {$this->publicationYear}";
    }
}

// Derived Class: EBook
class EBook extends Book {
    private $fileSize;

    public function __construct($title, $author, $publicationYear, $fileSize) {
        parent::__construct($title, $author, $publicationYear);
        $this->fileSize = $fileSize;
    }

    public function getDetails() {
        return parent::getDetails() . ", File Size: {$this->fileSize}MB";
    }
}

// Derived Class: PrintedBook
class PrintedBook extends Book {
    private $numberOfPages;

    public function __construct($title, $author, $publicationYear, $numberOfPages) {
        parent::__construct($title, $author, $publicationYear);
        $this->numberOfPages = $numberOfPages;
    }

    public function getDetails() {
        return parent::getDetails() . ", Pages: {$this->numberOfPages}";
    }
}

// Simulate input
$books = [];
$books[] = new EBook("The Pragmatic Programmer", "Andrew Hunt", 1999, 5);
$books[] = new PrintedBook("Clean Code", "Robert C. Martin", 2008, 464);
$books[] = new EBook("You Don't Know JS", "Kyle Simpson", 2015, 2);

// Simulate queries
$queries = [1, 3];

// Output to terminal
foreach ($queries as $query) {
    $index = $query - 1; // Convert to 0-based index
    if (isset($books[$index])) {
        echo $books[$index]->getDetails() . "\n";
    } else {
        echo "Book not found.\n";
    }
}
?>