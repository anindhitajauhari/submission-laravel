<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "Rory Gilmore",
            'email' => "rory@mail.com",
            'password' => bcrypt("rory")
        ]);

        User::create([
            'name' => "Taylor Swift",
            'email' => "taylor@mail.com",
            'password' => bcrypt("taylor")
        ]);

        User::create([
            'name' => "Ning Yizhuo",
            'email' => "yizhuo@mail.com",
            'password' => bcrypt("yizhuo")
        ]);

        User::create([
            'name' => "Dean Forester",
            'email' => "dean@mail.com",
            'password' => bcrypt("dean")
        ]);

        Article::create([
            'articleTitle' => "Navigating the Pages of Life",
            'slug' => "navigating-the-pages-of-life",
            'excerpt' => 'As the pages of life continue to turn, one thing remains constant: our unquenchable thirst for knowledge and connection. Just as my love for literature has guided me through the intricacies of life, its the insatiable curiosity that fuels our growth and underst',
            'articleBody' => "<p><strong>Stars Hollow, August 22, 2023</strong> As the pages of life continue to turn, one thing remains constant: our unquenchable thirst for knowledge and connection. Just as my love for literature has guided me through the intricacies of life, it's the insatiable curiosity that fuels our growth and understanding.</p>
            <p>Growing up in the enchanting town of Stars Hollow, I was lucky to be surrounded by people who nurtured my passion for books and learning. From the cozy comfort of the Dragonfly Inn to the eccentric charm of Miss Patty's dance studio, every corner of my hometown was a story waiting to be discovered. And it's this same sense of discovery that propels us forward on the grand adventure that is life.</p>
            <p>Life, much like a great novel, is filled with plot twists, heartwarming moments, and unexpected friendships. Just as I forged lifelong bonds with the eclectic townspeople of Stars Hollow, we all have the opportunity to connect with those whose paths we cross. Whether it's a fellow book enthusiast or someone from an entirely different walk of life, every interaction has the potential to add a new chapter to our personal stories.</p>
            <p>In the era of modern technology, it's easier than ever to stay connected with people from all corners of the globe. Social media, video calls, and online forums allow us to bridge geographical gaps and share our experiences with a wider audience. However, let's not forget the joy of face-to-face conversations, the kind that can only be found in a quaint diner or over a cup of coffee at Luke's. These are the moments that truly allow us to understand and empathize with one another.</p>
            <p>Speaking of coffee and community, Luke's Diner holds a special place in my heart. The aroma of freshly brewed coffee, the sound of friendly banter, and the comforting familiarity of the diner's interior all contribute to the sense of belonging that every individual craves. It's not just about the coffee; it's about the shared experiences and stories that we exchange within those four walls.</p>
            <p>As we flip through the pages of our lives, we should embrace each chapter with the same determination I had when preparing for my college exams. Just as I tackled complex texts one page at a time, we can overcome life's challenges by breaking them down into manageable steps. And just like the diverse array of books in my collection, we should welcome the diversity of experiences that come our way.</p>
            <p>In closing, let's remember that life is a beautifully messy collection of moments, emotions, and connections. Let's channel our inner Rory Gilmore and approach each day with the curiosity of a bookworm and the compassion of a friend. As we continue writing our own narratives, let's celebrate the characters we meet, the stories we share, and the unwavering pursuit of knowledge and connection that makes life truly extraordinary.</p>
            <p>So here's to you, dear reader, and to the countless adventures that await. May your pages be filled with love, laughter, and the joy of discovery.</p>
            <p><em>Keep reading, keep exploring, and keep connecting.</em></p>
            <p>Sincerely,<br>Rory Gilmore</p>",
            'category_id' => 1,
            'user_id' => 1
        ]);

        Article::create([
            'articleTitle' => "Unveiling the Beauty of Mathematics",
            'slug' => "unveiling-the-beauty-of-mathematics",
            'excerpt' => 'Patterns, those intricate arrangements that thread through nature and human creations alike, are the enchanting threads that we',
            'articleBody' => "<h5>The Symphony of Patterns</h5>
            <p>Patterns, those intricate arrangements that thread through nature and human creations alike, are the enchanting threads that weave the tapestry of our existence...</p>
            
            <h5>Numbers: Beyond Counting</h5>
            <p>Numbers, the building blocks of mathematics, transcend their utilitarian role of quantification and venture into the realms of abstraction and symbolism...</p>
            
            <h5>The Dance of Symmetry</h5>
            <p>Symmetry, that timeless concept celebrated in art, architecture, and nature, has a profound home in mathematics...</p>
            
            <h5>Beyond the Practical: Mathematics as Art</h5>
            <p>In the world of mathematics, creativity and aesthetics hold a distinguished place. Mathematicians, like artists, strive to unveil the hidden beauty in the abstract and complex...</p>
            
            <h5>Embracing the Mathematical Tapestry</h5>
            <p>As we journey through the intricate patterns, mesmerizing numbers, and enchanting symmetries, we discover that mathematics is more than a tool; it's a sublime art form that unveils the hidden order in the chaos of existence...</p>",
            'category_id' => 2,
            'user_id' => 2
        ]);

        

        Category::create([
            'categoryName' => "Lifestyle",
            'slug' => "lifestyle"
        ]);

        Category::create([
            'categoryName' => "Travel",
            'slug' => "travel"
        ]);

        Category::create([
            'categoryName' => "Technology",
            'slug' => "technology"
        ]);

        Category::create([
            'categoryName' => "Creativity",
            'slug' => "creativity"
        ]);

        Category::create([
            'categoryName' => "Food",
            'slug' => "food"
        ]);

        Tag::create([
            'tagName' => "personal"
        ]);

        Tag::create([
            'tagName' => "me"
        ]);

        Tag::create([
            'tagName' => "life"
        ]);

        Tag::create([
            'tagName' => "adventure"
        ]);

        Tag::create([
            'tagName' => "relaxation"
        ]);

        Tag::create([
            'tagName' => "cultural"
        ]);

        Tag::create([
            'tagName' => "programming"
        ]);

        Tag::create([
            'tagName' => "computer"
        ]);

        Tag::create([
            'tagName' => "robot"
        ]);

        Tag::create([
            'tagName' => "personal"
        ]);

        Tag::create([
            'tagName' => "art"
        ]);

        Tag::create([
            'tagName' => "culture"
        ]);

        Tag::create([
            'tagName' => "music"
        ]);

        Tag::create([
            'tagName' => "recipes"
        ]);

        Tag::create([
            'tagName' => "cooking"
        ]);


        Tag::create([
            'tagName' => "review"
        ]);








        User::factory(12)->create();
        Article::factory(20)->create();

    }
}
