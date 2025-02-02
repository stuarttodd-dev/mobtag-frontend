<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'position' => 1,
            'title' => 'Lorem Ipsum Dolor',
            'sub_title' => 'Consectetur Adipiscing Elit',
            'slug' => 'lorem-ipsum-dolor',
            'background' => 'mobtag.png',
            'image' => 'mobtag.png',
            'icon' => 'bi bi-placeholder',
            'keywords' => 'dummy, placeholder, text, example',
            'short_desc' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
            'long_desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.',
            'content' => 'services/1.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 2,
            'title' => 'Duis Aute Irure',
            'sub_title' => 'Reprehenderit in Voluptate',
            'slug' => 'duis-aute-irure',
            'background' => 'mobtag.png',
            'image' => 'mobtag.png',
            'icon' => 'bi bi-placeholder',
            'keywords' => 'sample, text, lorem, ipsum',
            'short_desc' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'long_desc' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.',
            'content' => 'services/2.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 3,
            'title' => 'Ut Enim Ad Minim',
            'sub_title' => 'Veniam Quis Nostrud',
            'slug' => 'ut-enim-ad-minim',
            'background' => 'mobtag.png',
            'image' => 'mobtag.png',
            'icon' => 'bi bi-placeholder',
            'keywords' => 'test, filler, placeholder, content',
            'short_desc' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.',
            'long_desc' => 'Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
            'content' => 'services/3.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 4,
            'title' => 'Curabitur Blandit',
            'sub_title' => 'Tempus Porttitor',
            'slug' => 'curabitur-blandit',
            'background' => 'mobtag.png',
            'image' => 'mobtag.png',
            'icon' => 'bi bi-placeholder',
            'keywords' => 'demo, ipsum, example, filler',
            'short_desc' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',
            'long_desc' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.',
            'content' => 'services/4.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 5,
            'title' => 'Vestibulum Dapibus',
            'sub_title' => 'Nunc Tellus Eget',
            'slug' => 'vestibulum-dapibus',
            'background' => 'mobtag.png',
            'image' => 'mobtag.png',
            'icon' => 'bi bi-placeholder',
            'keywords' => 'sample, generator, dummy, text',
            'short_desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'long_desc' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.',
            'content' => 'services/5.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 6,
            'title' => 'Pellentesque Ornare',
            'sub_title' => 'Sem Lacinia Quam',
            'slug' => 'pellentesque-ornare',
            'background' => 'mobtag.png',
            'image' => 'mobtag.png',
            'icon' => 'bi bi-placeholder',
            'keywords' => 'placeholder, lorem, ipsum, test',
            'short_desc' => 'Aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.',
            'long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content' => 'services/6.html',
            'footer_menu' => true,
            'active' => true,
        ]);
    }
}
