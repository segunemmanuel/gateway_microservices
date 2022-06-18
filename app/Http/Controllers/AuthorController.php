<?php
namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;


class AuthorController extends Controller
{

    use ApiResponser;
/**
 * The service to consume the Author microservices
 * @var [type] AuthorService
 */
public $authorService;




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

/**
 * Return the list of authors
* @return Illuminate\Http\Response
*/
public function index(){

    // Displaying the list of authors in the author microservices 
return $this->successResponse( $this->authorService->obtainAuthors());
}

/**
 * Creates a new author
* @return Illuminate\Http\Response
*/ 

public function store(Request $request){
    // Saving in the author microservices

    return $this->successResponse( $this->authorService->createAuthors($request->all(), Response::HTTP_CREATED ));

}



/**
 * Obtains the record of a single author
* @return Illuminate\Http\Response
*/

public function show($author){
// Displaying a single record of author 
// return $this->successResponse($this->authorService->obtainAuthor($author);
return $this->successResponse($this->authorService->obtainAuthor($author));


}


/**
 * Updates a single author
* @return Illuminate\Http\Response
*/

public function update(Request $request, $author){
 
    return $this->successResponse( $this->authorService->editAuthor($request->all(),$author));




}


/**
 * Deletes a single record of author
* @return Illuminate\Http\Response
*/

public function destroy($author){
    return $this->successResponse($this->authorService->deleteAuthor($author));

}


}
