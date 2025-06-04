<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    @if($books->isEmpty())
        <p>Tidak ada data buku.</p>
    @else
        <ul>
            @foreach ($books as $book)
                <li>
                    <strong>{{ $book->title }}</strong> by {{ $book->author->name }}<br>
                    Tahun Terbit: {{ $book->year }}<br>
                    Genres:
                    @if($book->genres->isEmpty())
                        <em>Tidak ada genre</em>
                    @else
                        @foreach ($book->genres as $genre)
                            {{ $genre->name }}@if (!$loop->last), @endif
                        @endforeach
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
