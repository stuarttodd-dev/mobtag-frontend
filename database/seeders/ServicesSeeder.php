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
            'title' => 'ESSCO Prefab',
            'sub_title' => 'Prefab Utility Cupboards for Heat Networks',
            'slug' => 'essco-prefab',
            'background' => 'essco.png',
            'image' => 'essco-logo.png',
            'icon' => 'bi bi-box-seam',
            'keywords' => 'prefab utility cupboards, heat networks, communal heating, prefabricated heating solutions, ESSCO Prefab, Heat Interface Unit, Cooling Interface Unit, Mechanical Ventilation',
            'short_desc' => 'ESSCO Prefab provides fully fitted, pre-tested prefab utility cupboards, reducing cost, risk, and ensuring ISO9001 compliance.',
            'long_desc' => 'With communal heating in apartments on the rise, many developers choose prefabricated utility cupboards to cut costs and risks while speeding up project completion. ESSCO Prefab delivers fully fitted, pre-tested utility cupboards with complete system traceability, ensuring ISO9001 compliance.',
            'content' => 'services/1.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 2,
            'title' => 'Sunnerg',
            'sub_title' => 'Renewable Energy Project Specialists',
            'slug' => 'sunnerg',
            'background' => 'sunnerg.png',
            'image' => 'sunnerg-logo.png',
            'icon' => 'bi bi-solar',
            'keywords' => 'Sunnerg, renewable energy, B2B projects, general contractor, solar PV, ground mount systems, Mobtag, DOTgroup QR tags, construction management, test records, commissioning records, as-built records, risk reduction, international energy projects',
            'short_desc' => 'Sunnerg specializes in B2B renewable energy projects, using Mobtag and DOTgroup QR tags to track records, improve efficiency, and reduce risk.',
            'long_desc' => 'Sunnerg, a leading contractor in renewable energy, implements Mobtag and DOTgroup QR tag systems to streamline test and commissioning records. Their innovative approach enhances efficiency and reduces risk across international projects.',
            'content' => 'services/2.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 3,
            'title' => 'MGH Offshore',
            'sub_title' => 'Global Energy Sector Engineering Solutions',
            'slug' => 'mgh-offshore',
            'background' => 'mgh.png',
            'image' => 'mgh-logo.png',
            'icon' => 'bi bi-globe2',
            'keywords' => 'MGH Offshore, global energy, engineering solutions, asset management, site servicing, compliance management, offshore projects, energy sector, operational efficiency, Mobtag system, risk management, digital documentation, regulatory compliance',
            'short_desc' => 'MGH Offshore provides engineering solutions for the global energy sector, integrating Mobtag for asset management and compliance.',
            'long_desc' => 'MGH Offshore specializes in delivering efficient engineering solutions for global energy projects. By utilizing the Mobtag system, they enhance operational efficiency, asset management, site servicing, and compliance management.',
            'content' => 'services/3.html',
            'footer_menu' => true,
            'active' => true,
        ]);
    }
}
