<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'meta_title' => 'Lorem Ipsum Dolor Sit Amet',
                'meta_keywords' => 'lorem, ipsum, dolor, sit, amet',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'slug' => 'lorem-ipsum-dolor',
                'image' => 'mobtag.png',
                'title' => 'Lorem Ipsum Dolor Sit Amet',
                'sub_title' => 'Consectetur adipiscing elit sed do eiusmod.',
            ],
            [
                'meta_title' => 'Ut Enim Ad Minim Veniam',
                'meta_keywords' => 'ut, enim, minim, veniam',
                'meta_description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
                'slug' => 'ut-enim-ad-minim',
                'image' => 'mobtag.png',
                'title' => 'Ut Enim Ad Minim Veniam',
                'sub_title' => 'Quis nostrud exercitation ullamco laboris nisi.',
            ],
            [
                'meta_title' => 'Duis Aute Irure Dolor',
                'meta_keywords' => 'duis, aute, irure, dolor',
                'meta_description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.',
                'slug' => 'duis-aute-irure-dolor',
                'image' => 'mobtag.png',
                'title' => 'Duis Aute Irure Dolor',
                'sub_title' => 'Excepteur sint occaecat cupidatat non proident.',
            ],
            [
                'meta_title' => 'Excepteur Sint Occaecat Cupidatat',
                'meta_keywords' => 'excepteur, sint, occaecat, cupidatat',
                'meta_description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa.',
                'slug' => 'excepteur-sint-occaecat',
                'image' => 'mobtag.png',
                'title' => 'Excepteur Sint Occaecat Cupidatat',
                'sub_title' => 'Sunt in culpa qui officia deserunt mollit anim.',
            ],
            [
                'meta_title' => 'Sed Ut Perspiciatis Unde Omnis',
                'meta_keywords' => 'sed, perspiciatis, unde, omnis',
                'meta_description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.',
                'slug' => 'sed-ut-perspiciatis',
                'image' => 'mobtag.png',
                'title' => 'Sed Ut Perspiciatis Unde Omnis',
                'sub_title' => 'Accusantium doloremque laudantium, totam rem aperiam.',
            ],
            [
                'meta_title' => 'At Vero Eos Et Accusamus',
                'meta_keywords' => 'vero, eos, accusamus',
                'meta_description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus.',
                'slug' => 'at-vero-eos',
                'image' => 'mobtag.png',
                'title' => 'At Vero Eos Et Accusamus',
                'sub_title' => 'Blanditiis praesentium voluptatum deleniti atque corrupti.',
            ],
        ];

        foreach ($articles as $key => $article) {
            Article::create([
                'position' => $key,
                'meta_title' => $article['meta_title'],
                'meta_keywords' => $article['meta_keywords'],
                'meta_description' => $article['meta_description'],
                'slug' => $article['slug'],
                'image' => $article['image'],
                'title' => $article['title'],
                'sub_title' => $article['sub_title'],
                'content' => 'articles/' . $key . '.html',
                'featured' => false,
                'active' => true,
            ]);
        }
    }
}
