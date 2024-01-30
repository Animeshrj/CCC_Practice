<?php
class Book {
    public $title;
    public $author;

    public function displayInfo() {
        echo "Title: $this->title, Author: $this->author";
    }
}

class Library {
    private $books = [];
    
    public function addBook(Book $book) {
        $this->books[] = $book;
        
    }

    public function displayAllBooks() {
        foreach ($this->books as $book) {
            $book->displayInfo();
            echo "<br>";
           
        }
    }
}

$book = new Book();
$book->title = $_POST['title'];
$book->author = $_POST['name'];


$library = new Library();
$library->addBook($book);
// $library->addBook($book2);

$library->displayAllBooks();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" value="" name ="title">Book's Title
            <br>
            <input type="text" value="" name ="name">Author Name
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>