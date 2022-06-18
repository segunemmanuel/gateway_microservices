<?php
namespace Services;

use Traits\ConsumeExternalService;

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
    $this->baseUri=config('services.authors.base_url');
 }



}