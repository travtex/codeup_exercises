<?php

$books = array(
    'The Hobbit' => array(
        'Published' => 1937,
        'Author' => 'J. R. R. Tolkien',
        'Pages' => 310
    ),
    'Game of Thrones' => array(
        'Published' => 1996,
        'Author' => 'George R. R. Martin',
        'Pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'Published' => 1951,
        'Author' => 'J. D. Salinger',
        'Pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'Published' => 1859,
        'Author' => 'Charles Dickens',
        'Pages' => 544
    )
);

ksort($books);

foreach ($books as $book => $book_info){
	fwrite(STDOUT, PHP_EOL . "{$book}: " . PHP_EOL);

		foreach($book_info as $key => $value){
			if ($key == 'Published'){  // Just to make console formatting output tidy
				fwrite(STDOUT, "\t\t{$key}:\t{$value}" . PHP_EOL);
			} else {
			fwrite(STDOUT, "\t\t{$key}:\t\t{$value}" . PHP_EOL);
		}
		} fwrite(STDOUT, PHP_EOL);
}

fwrite(STDOUT, PHP_EOL . "These books were written after 1950:" . PHP_EOL . PHP_EOL);


// Selecting only books published after 1950

foreach ($books as $book => $book_info){
	foreach ($book_info as $key => $value) {
		if ($key == 'Published' && intval($value) > 1950) {
			fwrite(STDOUT, "\t\t\"{$book}\" was published in {$value}." . PHP_EOL);
		}
	}

}

fwrite(STDOUT, PHP_EOL);
exit(0);

?>