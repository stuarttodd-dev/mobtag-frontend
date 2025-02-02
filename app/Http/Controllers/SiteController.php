<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

use App\Models\Project;

class SiteController extends Controller
{
    protected $viewData = [];

    public function __construct()
    {
        $this->viewData = [
            'footerProjects' => Project::where('footer_menu', true)->get()->sortBy('position'),
            'footerServices' => Service::where('footer_menu', true)->get()->sortBy('position'),
            'menuProjects' => Project::all()->sortBy('position')->take(10),
            'menuServices' => Service::all()->sortBy('position')->take(10),
            'menuArticles' => Article::all()->sortBy('position')->take(10),
            'pageTitle' => 'INNOVATION STUDIO',
            'shortDesc' => 'Half Shell Studios is a software house specialising in delivering clean, tested, robust and high-quality web and mobile app solutions. Our team of skilled developers craft custom software solutions tailored to your business needs.',
        ];
    }

    public function home()
    {
        $data = [
            'metaTitle' => 'Half Shell Studios: Innovative Software Solutions for Web and Mobile Development',
            'metaKeywords' => 'software development, web development, mobile app development, technology solutions, custom software, software house',
            'metaDescrpition' => 'Half Shell Studios is a leading software house specialising in web and mobile app development. Our team of skilled developers crafts custom software solutions tailored to your business needs. Explore our featured projects and discover the innovation behind Half Shell Studios.',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('home', $this->viewData);
    }

    public function projects()
    {
        $data = [
            'projects' => Project::all(),
            'pageTitle' => 'Projects',
            'metaTitle' => 'Half Shell Studios: Bespoke Web Development Projects',
            'metaKeywords' => 'bespoke web development, custom software, software house projects, web development portfolio',
            'metaDescription' => 'Explore our portfolio of bespoke web development projects at Half Shell Studios. We specialise in crafting custom software solutions, delivering innovative and tailored web applications for businesses of all sizes.',
            'pages' => 'Our Projects',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('projects', $this->viewData);
    }

    public function project(Project $id, string $slug)
    {
        $data = [
            'project' => $id,
            'metaTitle' =>  $id->title . ": " . $id->sub_title,
            'metaKeywords' => $id->keywords,
            'metaDescription' => $id->short_desc,
            'page' => $id->title,
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('project', $this->viewData);
    }

    public function about()
    {
        $data = [
            'metaTitle' => 'About Us - Half Shell Studios',
            'metaKeywords' => 'software development, Half Shell Studios, technology, innovation, development studio',
            'metaDescription' => 'Discover the story of Half Shell Studios, a leading software development house specializing in innovative and cutting-edge solutions.',
            'page' => 'About Us',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('about-us', $this->viewData);
    }

    public function why_choose_us()
    {
        $data = [
            'metaTitle' => 'Why Choose Us - Half Shell Studios',
            'metaKeywords' => 'software development, Half Shell Studios, technology, innovation, development studio',
            'metaDescription' => 'Discover the story of Half Shell Studios, a leading software development house specializing in innovative and cutting-edge solutions.',
            'page' => 'Why Choose Us?',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('why-choose-us', $this->viewData);
    }

    public function feature(Service $id)
    {
        $data = [
            'services' => Service::where('id', '!=', $id)->get(),
            'service' => $id,
            'metaTitle' =>  $id->meta_title,
            'metaKeywords' => $id->meta_keywords,
            'metaDescription' => $id->meta_description,
            'page' => $id->title,
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('service', $this->viewData);
    }

    public function features()
    {
        $data = [
            'services' => Service::all(),
            'pageTitle' => 'Services',
            'metaTitle' => 'Half Shell Studios: Development Services',
            'metaKeywords' => 'web development, bespoke solutions, Laravel, Composer, PHP',
            'metaDescription' => 'Explore our development services, leveraging powerful frameworks like Laravel and open source package repos like Composer for efficient and standards-compliant solutions.',
            'page' => 'Our Services',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('services', $this->viewData);
    }

    public function article(Article $id, string $slug)
    {
        $data = [
            'article' => $id,
            'metaTitle' =>  $id->meta_title,
            'metaKeywords' => $id->meta_keywords,
            'metaDescription' => $id->meta_description,
            'page' => $id->title,
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('article', $this->viewData);
    }

    public function case_studies()
    {
        $data = [
            'articles' => Article::where('active', true)->get()->sortBy('position'),
            'pageTitle' => 'Blog',
            'metaTitle' => 'Half Shell Studios: Bespoke Web Development Blog',
            'metaKeywords' => 'bespoke web development, custom software, software house projects, web development portfolio',
            'metaDescription' => 'Explore our portfolio of bespoke web development projects at Half Shell Studios. We specialise in crafting custom software solutions, delivering innovative and tailored web applications for businesses of all sizes.',
            'page' => 'Blog',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('blog', $this->viewData);
    }

    public function contact_submission(Request $request)
    {
        $data = $request->toArray();

        if (empty($data['subject'])) {
            $data['subject'] = 'Website Enquiry';
        }

        Mail::to(config('app.admin_email'))->send(new ContactForm($data));

        return redirect()
            ->route('contact-us')
            ->with('success', "Thank you for contacting us. We've received your email and will get back to you shortly.");
    }


    public function privacy_policy()
    {
        $data = [
            'metaTitle' => 'Privacy Policy - Half Shell Studios',
            'metaKeywords' => 'privacy policy, data protection, personal information, user privacy, data security',
            'metaDescription' => 'Read about how Half Shell Studios handles your personal information and ensures the privacy and security of your data.',
            'page' => 'Privacy Policy',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('privacy-policy', $this->viewData);
    }

    public function terms_and_conditions()
    {
        $data = [
            'metaTitle' => 'Terms and Conditions - Half Shell Studios',
            'metaKeywords' => 'terms and conditions, legal agreement, terms of service, user agreement, website usage',
            'metaDescription' => 'Explore the terms and conditions of using Half Shell Studios\' website, outlining the rules and guidelines for visitors.',
            'page' => 'Our Terms',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('terms-and-conditions', $this->viewData);
    }

    public function cookie_policy()
    {
        $data = [
            'metaTitle' => 'Cookie Policy - Half Shell Studios',
            'metaKeywords' => 'cookies, cookie policy, privacy, online tracking, web analytics, data protection',
            'metaDescription' => 'Learn about the cookie policy at Half Shell Studios and how we use cookies to enhance your browsing experience.',
            'page' => 'Cookie Policy',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('cookie-policy', $this->viewData);
    }

    public function contact()
    {
        $data = [
            'metaTitle' => 'Contact Us - Half Shell Studios',
            'metaKeywords' => 'software development, Half Shell Studios, technology, innovation, development studio',
            'metaDescription' => 'Contact Half Shell Studios, a leading software development house specializing in innovative and cutting-edge solutions.',
            'page' => 'Contact Us'
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('contact-us', $this->viewData);
    }
}
