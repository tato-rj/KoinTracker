<?php

namespace App\Models;

class Glossary extends AppModel
{
	public function scopeSorted($query)
	{
		return $query->orderBy('term')->get()->groupBy(function($item, $key) {
            return $item->term[0];
        })->sortBy(function($item, $key){
            return $key;
        });
	}
}
