let $doc := doc("books.xml")
for $x in $doc/bookstore/book
where $x/price > 3000
return $x