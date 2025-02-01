<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'position' => 1,
            'title' => 'Bet Hustle',
            'sub_title' => 'Revolutionise your matched betting experience with Bet Hustle',
            'slug' => 'bet-hustle',
            'background' => 'pexels-tembela-bohle-1884574.png',
            'image' => 'bethustle.png',
            'keywords' => 'bet hustle, reload offers, sign up offers, arbs, price boosts, matched betting, free access',
            'short_desc' => 'A cutting-edge platform designed to enhance your wagering journey. Accessible, intuitive, and feature-packed for all your matched betting needs.',
            'long_desc' => 'Bet Hustle introduces a new era in matched betting, providing users with a seamless and engaging platform. Experience the thrill of locking in guaranteed profit with our user-friendly interface. Bet Hustle is your ultimate companion in the world of matched betting. Visit Bet Hustle and elevate your matched betting experience today.',
            'url' => 'https://www.bet-hustle.co.uk',
            'featured_1' => true,
            'featured_2' => false,
            'footer_menu' => true,
            'technologies' => json_encode(['js', 'php', 'laravel', 'bootstrap']),
            'active' => true,
        ]);

        Project::create([
            'position' => 2,
            'title' => 'Bet API',
            'sub_title' => 'Harness the full potential of real-time data, odds, and analytics',
            'slug' => 'bet-api',
            'background' => 'pexels-tembela-bohle-1884580.png',
            'image' => 'betapi.png',
            'keywords' => 'bet api, bet predictions, football statistics, matched betting, premium predictions, free access',
            'short_desc' => 'Bet API offers powerful and reliable APIs for seamless integration into your betting applications. Create innovative and competitive betting solutions.',
            'long_desc' => 'Empower your betting applications with Bet API\'s robust and efficient APIs. Our platform provides developers with access to real-time data, odds, and analytics, ensuring a competitive edge in the dynamic world of online betting. Whether you\'re building a new app or enhancing an existing one, Bet API is your gateway to a world of possibilities. Explore the possibilities at Bet API',
            'url' => 'https://www.bet-api.uk',
            'featured_1' => false,
            'featured_2' => true,
            'footer_menu' => true,
            'technologies' => json_encode(['js', 'php', 'laravel', 'bootstrap']),
            'active' => true,
        ]);

        Project::create([
            'position' => 3,
            'title' => 'ChatGPT Food Recipes',
            'sub_title' => 'Unleash the Power of ChatGPT in the World of Food Magic',
            'slug' => 'food-recipes',
            'background' => 'pexels-tembela-bohle-1884574.png',
            'image' => 'foodrecipes.png',
            'keywords' => 'innovation, culinary, chatgpt, recipes, magic',
            'short_desc' => 'Embark on a journey of culinary wonders with ChatGPT-powered recipes.',
            'long_desc' => 'Discover the extraordinary world of ChatGPT Culinary Creations, where innovation meets gastronomy. Let our AI-driven recipes elevate your culinary experience to new heights. Unleash the magic of technology in the realm of flavors and tastes.',
            'url' => 'https://foodrecipes.uk/',
            'featured_1' => false,
            'featured_2' => false,
            'footer_menu' => true,
            'technologies' => json_encode(['js', 'php', 'laravel', 'bootstrap']),
            'active' => false,
        ]);

        Project::create([
            'position' => 4,
            'title' => 'FF Tactics Enthusiasts',
            'sub_title' => 'Join the community of Final Fantasy Tactics enthusiasts',
            'slug' => 'ff-tactics-enthusiasts',
            'background' => 'pexels-alena-darmel-7862596.png',
            'image' => 'fftactics.png',
            'keywords' => 'final fantasy tactics, RPG, final fantasy, fan site, tactical rpg, community, enthusiasts',
            'short_desc' => 'At FFTacticsEnthusiasts.com, you can dive into discussions, guides, and a shared passion for one of the most beloved tactical RPGs of all time.',
            'long_desc' => 'Welcome to Final Fantasy Tactics Enthusiasts, the hub for fans of the iconic tactical RPG. Immerse yourself in a vibrant community where enthusiasts share insights, strategies, and a deep love for the world of Ivalice. Whether you\'re a seasoned player or a newcomer, FFTacticsEnthusiasts.com is your go-to destination for in-depth discussions, guides, and a celebration of all things Final Fantasy Tactics. Join the community at FFTacticsEnthusiasts.com and embark on a journey through the tactical masterpiece.',
            'url' => 'https://www.fftacticsenthusiasts.com/',
            'featured_1' => false,
            'featured_2' => false,
            'footer_menu' => true,
            'technologies' => json_encode(['js', 'php', 'laravel', 'bootstrap']),
            'active' => false,
        ]);
    }
}
