<?php

namespace App\Models;
class Article 
{
        static $blog_posts = [
        [
            "title" => "The Enigma of Time",
            "slug" => "the-enigma-of-time",
            "author" => "Sarah Mitchell",
            "body" => "As the sun dipped below the horizon, casting an orange-pink glow across the sky, I found myself lost in contemplation about the nature of time. It's a concept that has intrigued and puzzled philosophers, scientists, and thinkers for centuries. From ancient civilizations marking the passing of days with sundials to the precision of atomic clocks, time has remained an enigma that we constantly strive to understand."
        ],
        [
            "title" => "The Chronicles of Aeloria",
            "slug" => "the-chronicles-of-aeloria",
            "author" => "Emily Gilmore",
            "body" => "The realm of Aeloria was a place where magic and mystery intertwined with the everyday lives of its inhabitants. From the soaring spires of the City of Lumos to the sprawling forests of Eldertree, every corner of the land held secrets waiting to be unraveled."
        ],
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }

}

// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Article extends Model
// {
//     use HasFactory;
// }

