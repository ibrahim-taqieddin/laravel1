<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public $booksArr = [];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $booksArr =  Book::all();
        return view('home', ['booksArr' => $booksArr]);

        # just test select statement 
        // $test= DB::select('select * from users');

        # dd($test);

        // $insUser = DB::table('users')
        //     ->insert([]);


        // global $booksArr;
        // $booksArr[] = ['id' => '1', 'name' => 'Ibn Khaldoun' , 'desc' => 'lorem lorem', 'img'=>'https://upload.wikimedia.org/wikipedia/ar/3/3a/Muqadimat_ibn_khaldun.jpg'];
        // $booksArr[] = ['id' => '2', 'name' => 'Good' , 'desc' => 'lorem lorem' , 'img'=>'https://upload.wikimedia.org/wikipedia/ar/3/3a/Muqadimat_ibn_khaldun.jpg'];
        // $booksArr[] = ['id' => '3', 'name' => 'Bad' , 'desc' => 'lorem lorem', 'img'=>'https://upload.wikimedia.org/wikipedia/ar/3/3a/Muqadimat_ibn_khaldun.jpg'];
        // $book1 = new Book('1', 'Ibn Khaldoun', "lorem lorem ", 'https://upload.wikimedia.org/wikipedia/ar/3/3a/Muqadimat_ibn_khaldun.jpg');
        // $book2 = new Book('2', 'Ibn Khaldoun', "lorem lorem ", 'https://upload.wikimedia.org/wikipedia/ar/3/3a/Muqadimat_ibn_khaldun.jpg');
        // $book3 = new Book('3', 'Ibn Khaldoun', "lorem lorem ", 'https://upload.wikimedia.org/wikipedia/ar/3/3a/Muqadimat_ibn_khaldun.jpg');
        // $booksArr = [$book1, $book2, $book3];
        // return view('home', ['booksArr' => $booksArr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request);
        // $book = new Book();
        // $book->name= $request->name;

        //or.  
        $book = Book::create($request->all());
        // return view('home',['booksArr'=>$book]);

        $this->validate($request, [
            'name'         => 'required',
            'book_description'   => 'required',
            'book_author'        => 'required',
            'book_image'         => 'required',
        ]);

        $book = new Book();
        $book->name = $request->name;
        $book->book_description = $request->book_description;
        $book->book_author = $request->book_author;
        $book->book_image = $request->book_image;

        return redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}