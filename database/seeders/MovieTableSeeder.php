<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=OsVip61VxJA',
                'thumbnail' => 'https://m.media-amazon.com/images/I/51zUbui+gbL._SY445_.jpg',
                'rating' => 4.3,
                'is_featured' => true
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=1N-GoSnKnTw',
                'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BOWE1MWE3ZDktOThlZS00ZmRiLWE4ZGEtNWJkMTVlZjdhZDIyXkEyXkFqcGdeQW1pYnJ5YW50._V1_.jpg',
                'rating' => 4.2,
                'is_featured' => false
            ],
            [
                'name' => 'The Godfather: Part II',
                'slug' => 'the-godfather-part-ii',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=rpGhlPK8S_8',
                'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BMTQyMDc0ODY1OV5BMl5BanBnXkFtZTgwMDI4NjIwMjE@._V1_.jpg',
                'rating' => 4.1,
                'is_featured' => false
            ],
        ];

        Movie::insert($movies);
    }
}
