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
            'metaTitle' => 'Mobtag - QR Code Digital Asset Management',
            'shortDesc' => 'Manage your digital assets efficiently with QR codes. Track, organize, and access assets in real time.',
        ];
    }

    public function home()
    {
        $data = [
            'metaTitle' => 'Welcome to Mobtag - Digital Asset Management with QR Codes',
            'metaKeywords' => 'QR codes, digital asset management, asset tracking, Mobtag, asset organization, real-time access',
            'metaDescription' => 'Mobtag allows you to manage your digital assets using QR codes. Streamline tracking, access, and organization of your assets instantly.',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('home', $this->viewData);
    }

    public function projects()
    {
        $data = [
            'projects' => Project::all(),
            'pageTitle' => 'Our Projects',
            'metaTitle' => 'Mobtag Projects - Digital Asset Management Solutions',
            'metaKeywords' => 'QR codes, asset tracking, digital management, Mobtag projects, case studies',
            'metaDescription' => 'Explore the projects behind Mobtag’s digital asset management solutions, utilizing QR codes for enhanced organization and real-time access.',
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
            'metaTitle' => 'About Mobtag - Digital Asset Management with QR Codes',
            'metaKeywords' => 'QR code technology, digital asset management, Mobtag team, asset organization',
            'metaDescription' => 'Learn about Mobtag, the digital asset management system leveraging QR code technology for efficient asset tracking and organization.',
            'page' => 'About Us',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('about-us', $this->viewData);
    }

    public function how_does_it_work()
    {
        $data = [
            'metaTitle' => 'How Mobtag Works - Streamlined Asset Management with QR Codes',
            'metaKeywords' => 'QR codes, how Mobtag works, asset tracking system, real-time asset management',
            'metaDescription' => 'Discover how Mobtag’s digital asset management system uses QR codes for easy asset tracking, organization, and instant access.',
            'page' => 'How Mobtag Works',
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
            'services' => Project::all(),
            'pageTitle' => 'Our Features',
            'metaTitle' => 'Mobtag Features - Asset Tracking, Organization, and Access',
            'metaKeywords' => 'QR codes, asset management features, Mobtag services, digital asset tracking, real-time organization',
            'metaDescription' => 'Explore the key features of Mobtag’s digital asset management system, leveraging QR code technology for easy tracking and access.',
            'page' => 'Our Features',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('services', $this->viewData);
    }

    public function case_study(Article $id, string $slug)
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
            'pageTitle' => 'Case Studies - Mobtag Digital Asset Management',
            'metaTitle' => 'Mobtag Case Studies - Real-World Applications of QR Code Asset Management',
            'metaKeywords' => 'QR code case studies, digital asset tracking, asset management, Mobtag case studies, real-time tracking',
            'metaDescription' => 'Read about how businesses are benefiting from Mobtag’s digital asset management system, utilizing QR code technology for easy tracking and access.',
            'page' => 'Case Studies',
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

    public function contact()
    {
        $data = [
            'metaTitle' => 'Contact Mobtag - Get in Touch for Asset Management Solutions',
            'metaKeywords' => 'contact Mobtag, asset management inquiries, QR code technology, support, digital asset management',
            'metaDescription' => 'Get in touch with Mobtag to learn more about our digital asset management system using QR codes for real-time tracking and access.',
            'page' => 'Contact Us'
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('contact-us', $this->viewData);
    }
}
