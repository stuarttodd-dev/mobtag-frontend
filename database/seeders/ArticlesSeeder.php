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
        $articles = json_decode(file_get_contents(storage_path('articles/articles.json')));

        $keywords = [
            'what-is-code-rot' => 'code rot, software maintenance, code quality',
            'uncle-bob' => 'Uncle Bob, Robert C. Martin, clean code',
            'encapsulate-what-varies' => 'encapsulation, design principles, software architecture',
            'composition-over-inheritance' => 'composition over inheritance, design patterns',
            'solid-principles' => 'SOLID principles, software design, object-oriented programming',
            'sql-optimisation' => 'SQL optimization, database performance, query optimization',
            'writing-readable-php' => 'writing readable PHP, coding standards, PHP best practices',
            'being-expressive' => 'expressive programming, code readability, programming style',
            'lambda-functions' => 'lambda functions, anonymous functions, PHP functions',
            'eloquent-performance' => 'Eloquent performance, Laravel Eloquent, ORM performance',
            'calculating-totals' => 'calculating totals, data aggregation, mathematical operations',
            'testing-your-ui' => 'UI testing, user interface testing, front-end testing',
            'chain-of-responsibility-pattern' => 'chain of responsibility pattern, design patterns, behavioral patterns',
            'command-pattern' => 'command pattern, design patterns, behavioral patterns',
            'interpreter-pattern' => 'interpreter pattern, design patterns, behavioral patterns',
            'iterator-pattern' => 'iterator pattern, design patterns, behavioral patterns',
            'mediator-pattern' => 'mediator pattern, design patterns, behavioral patterns',
            'memento-pattern' => 'memento pattern, design patterns, behavioral patterns',
            'null-object-pattern' => 'null object pattern, design patterns, behavioral patterns',
            'observer-pattern' => 'observer pattern, design patterns, behavioral patterns',
            'specification-pattern' => 'specification pattern, design patterns, behavioral patterns',
            'state-pattern' => 'state pattern, design patterns, behavioral patterns',
            'strategy-pattern' => 'strategy pattern, design patterns, behavioral patterns',
            'visitor-pattern' => 'visitor pattern, design patterns, behavioral patterns',
            'abstract-factory-pattern' => 'abstract factory pattern, design patterns, creational patterns',
            'builder-pattern' => 'builder pattern, design patterns, creational patterns',
            'factory-method-pattern' => 'factory method pattern, design patterns, creational patterns',
            'pool-pattern' => 'pool pattern, design patterns, creational patterns',
            'prototype-pattern' => 'prototype pattern, design patterns, creational patterns',
            'simple-factory-pattern' => 'simple factory pattern, design patterns, creational patterns',
            'singleton-pattern' => 'singleton pattern, design patterns, creational patterns',
            'static-factory-pattern' => 'static factory pattern, design patterns, creational patterns',
            'adapter-pattern' => 'adapter pattern, design patterns, structural patterns',
            'bridge-pattern' => 'bridge pattern, design patterns, structural patterns',
            'composite-pattern' => 'composite pattern, design patterns, structural patterns',
            'data-mapper-pattern' => 'data mapper pattern, design patterns, structural patterns',
            'decorator-pattern' => 'decorator pattern, design patterns, structural patterns',
            'dependency-injection-pattern' => 'dependency injection pattern, design patterns, structural patterns',
            'facade-pattern' => 'facade pattern, design patterns, structural patterns',
            'fluent-interface-pattern' => 'fluent interface pattern, design patterns, structural patterns',
            'flyweight-pattern' => 'flyweight pattern, design patterns, structural patterns',
            'proxy-pattern' => 'proxy pattern, design patterns, structural patterns',
            'registry-pattern' => 'registry pattern, design patterns, structural patterns',
            'design-patterns-overview' => 'design patterns, software design, design principles',
            'hexagonal-architecture' => 'hexagonal architecture, software architecture, architectural patterns',
            'encapsulate-what-varies' => 'encapsulation, design principles, software architecture',
        ];

        $images = [
            'what-is-code-rot' => 'article-example.png',
        ];

        $featured = [
            'what-is-code-rot',
            'encapsulate-what-varies',
            'solid-principles',
            'composition-over-inheritance',
        ];

        $positions = [
            'what-is-code-rot' => 1,
            'uncle-bob' => 2,
            'encapsulate-what-varies' => 3,
            'composition-over-inheritance' => 4,
            'solid-principles' => 5,
            'sql-optimisation' => 6,
            'writing-readable-php' => 7,
            'being-expressive' => 8,
            'lambda-functions' => 9,
            'eloquent-performance' => 10,
            'calculating-totals' => 11,
            'testing-your-ui' => 12,
            'chain-of-responsibility-pattern' => 13,
            'command-pattern' => 14,
            'interpreter-pattern' => 15,
            'iterator-pattern' => 16,
            'mediator-pattern' => 17,
            'memento-pattern' => 18,
            'null-object-pattern' => 19,
            'observer-pattern' => 20,
            'specification-pattern' => 21,
            'state-pattern' => 22,
            'strategy-pattern' => 23,
            'visitor-pattern' => 24,
            'abstract-factory-pattern' => 25,
            'builder-pattern' => 26,
            'factory-method-pattern' => 27,
            'pool-pattern' => 28,
            'prototype-pattern' => 29,
            'simple-factory-pattern' => 30,
            'singleton-pattern' => 31,
            'static-factory-pattern' => 32,
            'adapter-pattern' => 33,
            'bridge-pattern' => 34,
            'composite-pattern' => 35,
            'data-mapper-pattern' => 36,
            'decorator-pattern' => 37,
            'dependency-injection-pattern' => 38,
            'facade-pattern' => 39,
            'fluent-interface-pattern' => 40,
            'flyweight-pattern' => 41,
            'proxy-pattern' => 42,
            'registry-pattern' => 43,
            'design-patterns-overview' => 44,
            'hexagonal-architecture' => 45,
            'encapsulate-what-varies' => 46,
        ];

        foreach ($articles as $article) {

            if (empty($positions[$article->slug])) {
                continue;
            }

            Article::create([
                'position' => !empty($positions[$article->slug]) ? $positions[$article->slug] : 0,
                'meta_title' => $article->meta_title,
                'meta_keywords' => !empty($keywords[$article->slug]) ? $keywords[$article->slug] : '',
                'meta_description' => $article->meta_description,
                'slug' => $article->slug,
                'image' => $article->slug . '.png',
                'title' => $article->title,
                'sub_title' => $article->description,
                'content' => $article->content,
                'featured' => in_array($article->slug, $featured),
                'active' => true,
            ]);
        }



    }
}
