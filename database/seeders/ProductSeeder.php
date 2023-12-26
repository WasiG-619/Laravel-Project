<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
                                                                    // Songs
            ['artist' => 'Coldplay', 'title' => 'Viva la Vida', 'price' => 5.21, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Coldplay', 'title' => 'Clocks', 'price' => 3.89, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Avicii', 'title' => 'Feeling Good', 'price' => 9.80, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Oliver Heldens', 'title' => 'I Was Made For Lovin\' You', 'price' => 7.35, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Avicii', 'title' => 'Heaven', 'price' => 4.34, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Calvo', 'title' => 'Let Me Love You - DAZZ Remix', 'price' => 5.65, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Avicii', 'title' => 'What Would I Change It To', 'price' => 3.23, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Calvin Harris', 'title' => 'Acceptable in the 80\'s', 'price' => 5.19, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Kygo', 'title' => 'Stole The Show', 'price' => 4.27, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Martin Solveig', 'title' => 'Intoxicated - Radio Edit', 'price' => 11.77, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Craig David', 'title' => 'I Know You - Vigiland Remix', 'price' => 7.03, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Calvin Harris', 'title' => 'Sweet Nothing', 'price' => 5.87, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Avicii', 'title' => 'Sunset Jesus', 'price' => 5.26, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'CLMD', 'title' => 'DANCE', 'price' => 5.66, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Hayla', 'title' => 'Naked - THAT KIND Remix', 'price' => 9.54, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Riton', 'title' => 'Friday - Dopamine Re-Edit', 'price' => 9.70, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Wahlstedt', 'title' => 'Nobody Else', 'price' => 7.88, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Deepend', 'title' => 'Skinny Dip - Komodo', 'price' => 7.30, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Kungs', 'title' => 'This Girl - Kungs Vs. Cookin\' On 3 Burners', 'price' => 9.88, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Robin Schulz', 'title' => 'Ha Leh Lou Ya', 'price' => 6.50, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Avicii', 'title' => 'True Believer', 'price' => 8.87, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Robin Schulz', 'title' => 'Sugar', 'price' => 3.82, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Tujamo', 'title' => 'WITH U', 'price' => 7.52, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'BUNT.', 'title' => 'Hurricane', 'price' => 5.12, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Mako', 'title' => 'Real Life', 'price' => 9.03, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Robin Schulz', 'title' => 'Love Me Loud', 'price' => 8.81, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
            ['artist' => 'Sam Feldt', 'title' => 'Call On Me', 'price' => 4.97, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 1],
                                                                    // Games

                                                                    // Books
['artist' => 'Miguel de Cervantes', 'title' => 'Don Quixote', 'price' => 19.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'Charles Dickens', 'title' => 'A Tale of Two Cities', 'price' => 17.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'J.R.R. Tolkien', 'title' => 'The Lord of the Rings', 'price' => 24.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'Antoine de Saint-Exupéry', 'title' => 'The Little Prince', 'price' => 14.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'J.K. Rowling', 'title' => 'Harry Potter and the Prisoner of Azkaban', 'price' => 21.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'J.K. Rowling', 'title' => 'Harry Potter and the Goblet of Fire', 'price' => 18.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'J.K. Rowling', 'title' => 'Harry Potter and the Deathly Hallows Part 2', 'price' => 16.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'H. Rider Haggard', 'title' => 'She: A History of Adventure', 'price' => 22.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'Dan Brown', 'title' => 'The Da Vinci Code', 'price' => 20.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
['artist' => 'J.D. Salinger', 'title' => 'The Catcher in the Rye', 'price' => 15.99, 'image_path' => 'https://picsum.photos/1200/800', 'product_type_id' => 3],
                                                                            
        ];
        

        foreach ($products as $product) {
            Product::create([
                'artist' => $product['artist'],
                'title' => $product['title'],
                'price' => $product['price'],
                'image_path' => $product['image_path'],
                'product_type_id' => $product['product_type_id'],
            ]);
        }
        
    }

    }

