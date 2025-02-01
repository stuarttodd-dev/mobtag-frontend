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
            'title' => 'Mobile App Development',
            'sub_title' => 'Crafting Innovative Mobile Solutions',
            'slug' => 'mobile-app-development',
            'background' => 'service-background.png',
            'image' => 'mobile-app-development.png',
            'icon' => 'bi bi-phone',
            'keywords' => 'mobile app, mobile development, React Native, iOS, Android',
            'short_desc' => 'We specialise in creating cutting-edge mobile applications with a focus on user experience and performance.',
            'long_desc' => 'Our mobile app development services cover everything from ideation to deployment. Whether it\'s a mobile game, utility app, or a complex business solution, we use the latest technologies like React Native to bring your vision to life. Our team ensures clean code principles, SOLID design, and rigorous testing for robust and scalable applications.',
            'content' => 'services/mobile-apps.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 2,
            'title' => 'Design and Development',
            'sub_title' => 'Building Dynamic and Responsive Websites',
            'slug' => 'design-and-development',
            'background' => 'service-background.png',
            'image' => 'web-development.png',
            'icon' => 'bi bi-columns',
            'keywords' => 'web development, Laravel, PHP, React, Vue, Bootstrap 5, Tailwind',
            'short_desc' => 'We encompass a wide range of technologies to create modern, responsive, and feature-rich websites.',
            'long_desc' => 'From e-commerce platforms to custom content management systems, we excel in delivering web solutions that meet the unique needs of our clients. Our expertise includes working with popular frameworks like Laravel, React, and Vue, ensuring clean code practices, and integrating the latest design trends.',
            'content' => 'services/web-solutions.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 3,
            'title' => 'Bespoke Development',
            'sub_title' => 'Crafting Tailored Solutions for Your Unique Needs',
            'slug' => 'bespoke-development',
            'background' => 'service-background.png',
            'image' => 'bespoke-development.png',
            'icon' => 'bi-code-slash',
            'keywords' => 'custom development, tailored solutions, web applications',
            'short_desc' => 'Our bespoke development services focus on crafting tailored solutions to meet your unique business needs.',
            'long_desc' => 'Every business is unique, and so are its requirements. Our team excels in crafting bespoke solutions, ensuring that your software aligns perfectly with your business goals and processes.',
            'content' => 'services/bespoke-development.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 4,
            'title' => 'Hosting and Support',
            'sub_title' => 'Reliable Hosting and Ongoing Support for Your Business',
            'slug' => 'hosting-and-support',
            'background' => 'service-background.png',
            'image' => 'hosting-support.png',
            'icon' => 'bi-chat-right-dots',
            'keywords' => 'web hosting, server management, cloud solutions, website maintenance, security updates',
            'short_desc' => 'We provide secure and scalable hosting solutions with dedicated support to ensure your systems run smoothly.',
            'long_desc' => 'Our hosting and support services are designed to keep your applications running optimally. We offer managed hosting, cloud solutions, regular security updates, and proactive monitoring to ensure high uptime and performance.',
            'content' => 'services/hosting-and-support.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 5,
            'title' => 'Legacy Code Migration',
            'sub_title' => 'Modernising Your Codebase for Future Growth',
            'slug' => 'legacy-code-migration',
            'background' => 'service-background.png',
            'image' => 'legacy-code-migration.png',
            'icon' => 'bi-body-text',
            'keywords' => 'legacy system, code migration, PHP upgrades, refactoring, Laravel, modernisation',
            'short_desc' => 'We help businesses migrate and modernise legacy codebases to improve performance, security, and maintainability.',
            'long_desc' => 'Working with outdated code can be frustrating and costly. Our team specialises in migrating legacy applications to modern frameworks like Laravel and updating old PHP versions to ensure scalability, security, and ease of maintenance.',
            'content' => 'services/legacy-code-migration.html',
            'footer_menu' => true,
            'active' => true,
        ]);

        Service::create([
            'position' => 6,
            'title' => 'Small Business Solutions',
            'sub_title' => 'Affordable and Scalable Solutions for Growing Businesses',
            'slug' => 'small-business-solutions',
            'background' => 'service-background.png',
            'image' => 'small-business.png',
            'icon' => 'bi bi-briefcase',
            'keywords' => 'small business software, website development, digital solutions, affordable web design, CRM',
            'short_desc' => 'We offer tailored digital solutions for small businesses to establish a strong online presence and streamline operations.',
            'long_desc' => 'Our small business solutions include website development, e-commerce platforms, and custom tools designed to help small businesses compete effectively in the digital landscape. We provide cost-effective and scalable solutions that grow with your business.',
            'content' => 'services/small-business-solutions.html',
            'footer_menu' => true,
            'active' => true,
        ]);
    }
}
