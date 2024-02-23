<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla orci, finibus sit amet urna vel, blandit tempor ligula. Aliquam feugiat aliquam sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec risus dui, viverra nec scelerisque eu, sollicitudin lobortis nisl.',
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla orci, finibus sit amet urna vel, blandit tempor ligula. Aliquam feugiat aliquam sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec risus dui, viverra nec scelerisque eu, sollicitudin lobortis nisl.',
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
