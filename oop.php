<?php


class Book
{



    private $title;
    private $availableCopies;


    public function __construct($title, $availableCopies)
    {



        $this->title = $title;
        $this->availableCopies = $availableCopies;


    }



    public function getTitle()
    {
        return $this->title;
    }





    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }




    public function borrowBook()
    {
        $this->availableCopies -= 1;
    }



    public function returnBook()
    {
        $this->availableCopies += 1;
    }


}


class Member
{



    private $name;



    public function __construct($name)
    {



        $this->name = $name;



    }





    public function getName()
    {
        return $this->name;
    }




    public function borrowBook($book)
    {
        if ($book->getAvailableCopies() > 0) {
            $book->borrowBook();
            echo "Available Copies of '{$book->getTitle()}': {$book->getAvailableCopies()}" . PHP_EOL;
        }


    }





    public function returnBook($book)
    {

        $book->returnBook();
        echo "Available Copies of '{$book->getTitle()}': {$book->getAvailableCopies()}" . PHP_EOL;
    }


}

$book1 = new Book('The Great Gatsby', 5);
$book2 = new Book('To Kill a Mockingbird', 3);



$member1 = new Member('John Doe');
$member1->borrowBook($book1);

$member2 = new Member('Jane Smith');
$member2->borrowBook($book2);





