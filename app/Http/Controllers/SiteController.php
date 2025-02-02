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
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'shortDesc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ];
    }

    public function home()
    {
        $data = [
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('home', $this->viewData);
    }

    public function projects()
    {
        $data = [
            'projects' => Project::all(),
            'pageTitle' => 'Projects',
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'page' => 'About Us',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('about-us', $this->viewData);
    }

    public function why_choose_us()
    {
        $data = [
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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
            'pageTitle' => 'Features',
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'page' => 'Our Features',
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
            'pageTitle' => 'Case Studies',
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
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


    public function privacy_policy()
    {
        $data = [
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'page' => 'Privacy Policy',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('privacy-policy', $this->viewData);
    }

    public function terms_and_conditions()
    {
        $data = [
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'page' => 'Our Terms',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('terms-and-conditions', $this->viewData);
    }

    public function cookie_policy()
    {
        $data = [
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'page' => 'Cookie Policy',
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('cookie-policy', $this->viewData);
    }

    public function contact()
    {
        $data = [
            'metaTitle' => 'Lorem Ipsum - Dolor Sit Amet',
            'metaKeywords' => 'lorem, ipsum, dolor, sit, amet, consectetur, adipiscing, elit, sed, do',
            'metaDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'page' => 'Contact Us'
        ];

        $this->viewData = array_merge($this->viewData, $data);

        return view('contact-us', $this->viewData);
    }
}
