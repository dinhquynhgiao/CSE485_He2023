<?php
    interface IBook {
        public function getTitle();
        public function getAuthor();
        public function getPublisher();
        public function getYearPublished();
        public function getISBN();
        public function getChapters();
    }
    class Book implements IBook {
        private $title;
        private $author;
        private $publisher;
        private $yearPublished;
        private $isbn;
        private $chapters;
    
        public function __construct($title, $author, $publisher, $yearPublished, $isbn, $chapters) {
            $this->title = $title;
            $this->author = $author;
            $this->publisher = $publisher;
            $this->yearPublished = $yearPublished;
            $this->isbn = $isbn;
            $this->chapters = $chapters;
        }
    
        public function getTitle() {
            return $this->title;
        }
    
        public function getAuthor() {
            return $this->author;
        }
    
        public function getPublisher() {
            return $this->publisher;
        }
    
        public function getYearPublished() {
            return $this->yearPublished;
        }
    
        public function getISBN() {
            return $this->isbn;
        }
    
        public function getChapters() {
            return $this->chapters;
        }
    }
    class BookList {
        private $books;
    
        public function __construct() {
            $this->books = array();
        }
    
        public function addBook($book) {
            array_push($this->books, $book);
        }
    
        public function getBooks() {
            return $this->books;
        }
    
        public function sortByAuthor() {
            usort($this->books, function($a, $b) {
                return strcmp($a->getAuthor(), $b->getAuthor());
            });
        }
    
        public function sortByTitle() {
            usort($this->books, function($a, $b) {
                return strcmp($a->getTitle(), $b->getTitle());
            });
        }
    
        public function sortByYearPublished() {
            usort($this->books, function($a, $b) {
                return $a->getYearPublished() - $b->getYearPublished();
            });
        }
    }
    $bookList = new BookList();
    $bookList->addBook(new Book("Sách 1", "Tác giả A", "NXB X", 2022, "12345", array("Chương 1", "Chương 2")));
    $bookList->addBook(new Book("Sách 2", "Tác giả B", "NXB Y", 2021, "67890", array("Chương 1", "Chương 2", "Chương 3")));
    $bookList->addBook(new Book("Sách 3", "Tác giả C", "NXB Z", 2020, "54321", array("Chương 1")));

    if (isset($_POST["title"]) && isset($_POST["author"]) && isset($_POST["publisher"]) && isset($_POST["yearPublished"]) && isset($_POST["isbn"]) && isset($_POST["chapters"])) {
        $bookList->addBook(new Book($_POST["title"], $_POST["author"], $_POST["publisher"]));

    $bookList->addBook(new Book($_POST["title"], $_POST["author"], $_POST["publisher"], $_POST["yearPublished"], $_POST["isbn"], explode(",", $_POST["chapters"])));
    }

if (isset($_GET["sort"])) {
    switch ($_GET["sort"]) {
        case "author":
            $bookList->sortByAuthor();
            break;
        case "title":
            $bookList->sortByTitle();
            break;
        case "yearPublished":
            $bookList->sortByYearPublished();
            break;
        default:
            break;
    }
}

echo "<table>";
echo "<tr><th>Tên sách</th><th>Tác giả</th><th>Nhà xuất bản</th><th>Năm xuất bản</th><th>Số hiệu ISBN</th><th>Danh mục các chương</th></tr>";
foreach ($bookList->getBooks() as $book) {
    echo "<tr><td>" . $book->getTitle() . "</td><td>" . $book->getAuthor() . "</td><td>" . $book->getPublisher() . "</td><td>" . $book->getYearPublished() . "</td><td>" . $book->getISBN() . "</td><td>" . implode(", ", $book->getChapters()) . "</td></tr>";
}
echo "</table>";

echo "<p>Sắp xếp theo: <a href=\"?sort=author\">Tên tác giả</a> | <a href=\"?sort=title\">Tên sách</a> | <a href=\"?sort=yearPublished\">Năm xuất bản</a></p>";

echo "<h2>Thêm sách mới</h2>";
echo "<form method=\"POST\">";
echo "<p><label>Tên sách: <input type=\"text\" name=\"title\"></label></p>";
echo "<p><label>Tác giả: <input type=\"text\" name=\"author\"></label></p>";
echo "<p><label>Nhà xuất bản: <input type=\"text\" name=\"publisher\"></label></p>";
echo "<p><label>Năm xuất bản: <input type=\"number\" name=\"yearPublished\"></label></p>";
echo "<p><label>Số hiệu ISBN: <input type=\"text\" name=\"isbn\"></label></p>";
echo "<p><label>Danh mục các chương (các chương cách nhau bằng dấu phẩy): <input type=\"text\" name=\"chapters\"></label></p>";
echo "<p><input type=\"submit\" value=\"Thêm sách\"></p>";
echo "</form>";
?>