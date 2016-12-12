<?php

namespace App\Repositories;

use App\Tag;
use App\Contracts\TagsInterface;

class TagsRepository implements TagsInterface {
	
	public function get(array $filters)
	{
		return Tag::all();
	}
}