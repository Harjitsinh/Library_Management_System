<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    private $books = [
        ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'status' => 'Available'],
        ['title' => '1984', 'author' => 'George Orwell', 'status' => 'Borrowed'],
        ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'status' => 'Available'],
    ];

    // Show homepage
    public function index()
    {
        return view('welcome');
    }

    // Show books
    public function books()
    {
        return view('books', ['books' => $this->books]);
    }

    // Show add book form
    public function addBook()
    {
        return view('add-book');
    }

    // Handle book addition
    public function storeBook(Request $request)
    {
        $newBook = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'status' => 'Available',
        ];

        // Simulating storing the book (Append it to the books array temporarily)
        $this->books[] = $newBook;

        // Redirect back to books listing
        return redirect('/books')->with('success', 'Book added successfully!');
    }

    // Search books
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = array_filter($this->books, function ($book) use ($query) {
            return stripos($book['title'], $query) !== false || stripos($book['author'], $query) !== false;
        });

        return view('search', ['results' => $results, 'query' => $query]);
    }
}
