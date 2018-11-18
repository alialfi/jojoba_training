<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BookModel;

class BookController extends Controller
{
	function __construct()
	{
		// $this->BookModel = new BookModel;
		$this->book_table = new BookModel;
	}
	
    public function Index(Request $request, $author = 0  , $name = 0 )
    {
    	
    	// dd($save);

    	dd($this->book_table->get_book());
    }

    public function save(Request $request)
    {
    	
		for ($i=1; $i <= 50; $i++) { 
		
			$book = new BookModel;
			$book->id = $i;
			$book->author = '0';
			$book->name = 'book_'.$i;

			$save = $book->save();

    	}
    }
}
