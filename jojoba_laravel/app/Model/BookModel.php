<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'Book';

    function __construct($author = null, $name = null)
	{
		$this->id = $author;
		$this->author = $author;
		$this->name = $name;
	}
	

    public function get_author()
    {
    	dd($this->author);
    }

    public function get_book()
    {
    	$table = $this->get($this->_table);
    	dd($table);
    }
}
