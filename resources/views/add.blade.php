@extends('master')

@section('addForm')
    <div class="container">
        <form action="create" method="post">
            @csrf
            {{-- book name --}}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Book Name</label>
                <input type="text" name='name' class="form-control" id="bookname" aria-describedby="bookName">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Book Description</label>
                <input type="text" name="book_description" class="form-control" id="bookdescription"
                    aria-describedby="bookdescription">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Book Author</label>
                <input type="text" name="book_author" class="form-control" id="bookauthor" aria-describedby="bookauthor">
            </div>

            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Book Image</label>
                <input type="file" name="book_image" class="form-control" id="inputGroupFile02">
            </div>

            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection
