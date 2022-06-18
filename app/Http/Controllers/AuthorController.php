<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Services\AuthorService;

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




}


/**
 * Creates a new author
* @return Illuminate\Http\Response
*/ 

public function store(Request $request){


}



/**
 * Obtains the record of a single author
* @return Illuminate\Http\Response
*/

public function show($author){


}


/**
 * Updates a single author
* @return Illuminate\Http\Response
*/

public function update(Request $request, $author){
 



}


/**
 * Deletes a single record of author
* @return Illuminate\Http\Response
*/

public function destroy($author){


}


}
