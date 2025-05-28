<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Buku</h1>

<ul>
    @foreach ($books as $book)
        <li>
            <strong>{{ $book->title }}</strong> ({{ $book->year }})
            - Penulis: {{ $book->author->name }}
        </li>
    @endforeach
</ul>


</body>
</html>
