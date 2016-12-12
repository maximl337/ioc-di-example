<?php

namespace App\Contracts;

interface TagsInterface {
	
	public function get(array $filters);
}