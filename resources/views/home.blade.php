@extends('master')

@section('addbook')
    <a href="add"><button>Add New Book</button></a>
@endsection

@section('table')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Book Name</th>
                <th scope="col">Description</th>
                <th scope="col">author</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booksArr as $book)
                <tr>
                    <th scope="row">{{ $book['id'] }}</th>
                    <td>{{ $book['name'] }}</td>
                    <td>{{ $book['book_description'] }}</td>
                    <td>{{ $book['book_author'] }}</td>
                    <td><img src="{{ $book['book_image'] }}" style="height: 150px; width:150px"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
