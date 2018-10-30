<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
    	'binary_search',
    	'dynamic_progamming',
    	'ad-hoc',
    	'basic_data_structure',
    	'bfs',
    	'dfs',
    	'math',
    	'string',
    	'greedy',
    	'bit_manipulation',
    	'divide_and_conquer',
    	'sort',
    ];
}
