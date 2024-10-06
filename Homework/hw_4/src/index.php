<?php

require_once 'DigitalBook.php';
require_once 'PaperBook.php';
require_once 'Shelf.php';
require_once 'Room.php';

$pBook1 = new PaperBook('Лабиринт отражений', ['Лукьяненко С.В.'], 'Фантастика', 1996, 1);
$pBook2 = new PaperBook('Измененные', ['Лукьяненко С.В.'], 'Фантастика', 2022, 1);
$pBook3 = new PaperBook('Золотой телёнок', ['И.Ильф', 'Е.Петров'], 'Сатира', 1931, 1);
$dBook1 = new DigitalBook('Измененные 2', ['Лукьяненко С.В.'], 'Фантастика', 2022, 'http://www.digital-book.com/Changed.pdf');
$dBook2 = new DigitalBook('Дюна', ['Фрэнк Герберт'], 'Фантастика', 1965, 'http://www.digital-book.com/dune.mp3');

$room1 = new Room(1, 'ул.Ленина, 6', new Shelf(1, 1, 2, []));   //Созадали помещение №1 по указанному адресу, в которое поместили шкаф №1 с объемом в 2 книги

$room1->getBookShelf()->placeBookInShelf($pBook1);  // Кладем книгу $pBook1 в шкаф №1
$room1->getBookShelf()->placeBookInShelf($pBook3);  // Кладем книгу $pBook2 в шкаф №1
echo $room1 . PHP_EOL;                                  // Получаем данные по помещению (номер, адрес)
echo $pBook2->takeBook('Иванов И.И.') . PHP_EOL;    // Выдаем книгу на руки
echo 'Количество книг в шкафу №' . $room1->getBookShelf()->getShelfId() . ': ' . $room1->getBookShelf()->getCountBooks() . PHP_EOL;
echo $pBook2->returnBook('Иванов И.И') . PHP_EOL;   // Возврат книги от читателя
echo $pBook2->takeBook('Петров П.П.') . PHP_EOL;
echo $pBook3->takeBook('Петров П.П.') . PHP_EOL;
echo $dBook2->takeBook('Сидоров И.П.') . PHP_EOL;


