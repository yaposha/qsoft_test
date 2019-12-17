<!DOCTYPE html>
<html>
 <head>
  <title>Задание номер 16</title>
 </head>
 <body>
 <?php 
 	$dataBase = [

 		'authors' => [
 	 		1 => [
 	 		'name' => 'Николай Васильевич Гоголь',
 	 		'email' => 'gogol@gogol.ru',
 	 		'birth_year' => 1809,
 	 		],
 	 		2 => [
 	 		'name' => 'Михаил Афанасьевич Булгаков',
 	 		'email' => 'mihail@bulgakov.ru',
 	 		'birth_year' => 1891,
 	 		],
 	 		3 => [
 	 		'name' => 'Лев Николаевич Толстой',
 	 		'email' => 'lev@tolstoy.ru',
 	 		'birth_year' => 1828,
 	 		],
 	 	],	
 	
 	 	'books' => [
 			1 => [
 			'name' => 'Мертвые души',
 			'year' => 1809,
 			'author' => 1,
 			],
 			2 => [
 			'name' => 'Ревизор',
 			'year' => 1836,
 			'author' => 1,
 			],
 			3 => [
 			'name' => 'Мастер и Маргарита',
 			'year' => 1929,
 			'author' => 2,
 			],
 			4 => [
 			'name' => 'Собачье сердце',
 			'year' => 1925,
 			'author' => 2,
 			],
 			5 => [
 			'name' => 'Война и мир',
 			'year' => 1865,
 			'author' => 3,
 			],
 			6 => [
 			'name' => 'Анна Каренина',
 			'year' => 1873,
 			'author' => 3,
 			],
 		],
 	 ];

 	function showAuthorData($data) {
 	 	 	foreach ($data['authors'] as $author) {
 	 	 		echo "<div>" . "<br/>" . $author['name'] . " " . "&mdash;" . " " . "<a href = mailto:" . $author['email'] . ">" . $author['email'] . "</a>" . " " . "&mdash;" . " " . $author['birth_year'] . "</div>";
 	 	 	}
 	 	 	echo "<div>";
 	}

 	function showBookData($data) {
 	 	 	foreach ($data['books'] as $book) {
 	 			$book_author = $book['author'];
 	 	 		echo "<br/>" . $book['name'] . " " . "&mdash;" . " " . $data['authors'][$book_author]['name'] . " " . "&mdash;" . " " . $book['year'];
 	 	 	}
 	 	 	echo "</div>";
 	}

 	showAuthorData($dataBase);
 	showBookData($dataBase);

 ?>
 </body>
</html>