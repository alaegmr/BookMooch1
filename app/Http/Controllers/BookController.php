<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'genre' => 'nullable|string|max:255',
            'publication_year' => 'nullable|integer',
            'language' => 'required|string|max:255',
            'ISBN' => 'required|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'availability_status' => 'nullable|string|max:255',
            'added_date' => 'nullable|date',
        ]);

        // Enregistrer le livre dans la base de données
        $book = new Book();
        $book->user_id = auth()->id();
        $book->fill($validatedData);

        // Gérer l'image de couverture si elle est téléchargée
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $book->cover_image = $imageName;
        }

        $book->save();

        return redirect()->route('books.mybooks')->with('success', 'Book created successfully!');
    }


    public function index()
    {
        $books = Book::where('user_id', auth()->id())->get();
        return view('books.mybooks', compact('books'));
    }

    public function allBooks()
{
    $books = Book::all();
    return view('books.allbooks', compact('books'));
}
public function show($id)
{
    $book = Book::findOrFail($id);
    return view('books.show', compact('book'));
}


}
