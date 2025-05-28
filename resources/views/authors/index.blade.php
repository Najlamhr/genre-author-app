<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Penulis</h1>

<ul>
    @foreach ($authors as $author)
        <li>
            <strong>{{ $author->name }}</strong> - {{ $author->email }}
            <ul>
                @foreach ($author->books as $book)
                    <li>{{ $book->title }} ({{ $book->year }})</li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>

</body>
</html>
