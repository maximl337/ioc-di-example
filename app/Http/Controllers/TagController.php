<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Contracts\TagsInterface;
use App\Http\Requests;

class TagController extends Controller
{
    public function index(Request $request, TagsInterface $tags)
    {
    	try {
    		
    		$tags = $this->tags->get($request->get('filter'));

    		return response()->json($this->tagsTranformer()->transformCollection($tags));

    	} catch (Exception $e) {
    		

    	}
    }

    
}
