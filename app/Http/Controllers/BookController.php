<?php
namespace App\Http\Controllers;
use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Services\BookService;

class BookController extends Controller
{


    use ApiResponser;
/**
 * The service to consume the Book microservices
 * @var [type] AuthorService
 */
public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {

        $this->bookService = $bookService;


    }




    /**
     * Return the list of books
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Obtains and show one book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {


    }

    /**
     * Update an existing book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
    

    }

    /**
     * Remove an existing book
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
    
    }
}
