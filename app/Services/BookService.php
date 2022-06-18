<?php
namespace App\Services;

use App\Traits\ConsumeExternalService;

class BookService
{
use ConsumeExternalService;

/**
 * The base uri to consunmer the author services
 * @var string
 */

 public $baseUri;
 public function __construct()
 {
    $this->baseUri=config('services.books.base_url');
 }



}