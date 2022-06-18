<?php
namespace App\Services;

use App\Traits\ConsumeExternalService;


class AuthorService
{
use ConsumeExternalService;

/**
 * The base uri to consunmer the author services
 * @var string
 */

public $baseUri;
 
 public function __construct()
 {
    $this->baseUri = config('services.authors.base_uri');

 }

/**
 * Obtain the full list of authors from the Author Microservices
 * @return strinh
 */
public function obtainAuthors(){
return $this->performRequest('GET','/authors');
}
/**
 * Create a single author in the th  Author Microservices
 * @return string
 */
public function createAuthors($data){

    return $this->performRequest('POST','/authors', $data);

    
    }

    /**
 * Shows a single author from the Author Microservices
 * @return string
 */
 public function obtainAuthor($author){
    return $this->performRequest('GET', "/authors/{$author}");


    }

     /**
 * Update a single author from the Author Microservices
 * @return string
 */
 public function editAuthor($data, $author){
    return $this->performRequest('PUT', "/authors/{$author}", $data);

    }


      /**
 * Delete a single author from the Author Microservices
 * @return string
 */
public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }


}