<?php 
// using heredoc

$book = 'Gone Girl';
$author = 'Gillian Flynn';
$character = 'Amy';
$actress = 'Rosemund Pike';

$content = <<<GONE
I could never pick a favorite book or movie, but a book that was made into a movie that I really enjoyed was $book, by $author.

I was not a fan of $actress but she played a very good villian in the book. I did not like the siser Margo. The story line of $book was exciting, mind bending and kept my attention. I though the book and the movie were very close to each other. 
GONE;


$content =

'I could never pick a favorite book or movie, but a book that was made into a movie that I really enjoyed was '.$book.', by '.$author.'.

I was not a fan of '.$actress.' but she played a very good villian in the book. I did not like the siser Margo. The story line of '.$book.' was exciting, mind bending and kept my attention. I though the book and the movie were very close to each other.'
;

echo $content;