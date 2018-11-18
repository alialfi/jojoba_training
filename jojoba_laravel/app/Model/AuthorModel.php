<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model
{
    protected $table = 'Book'

    function __construct($)
    {
    	$this->foo = $foo;
    }
    
    public function get_author(Request $request)
    {
    	dd('get_author');
    }
}
