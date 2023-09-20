<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function admission_process(){ 
        return view('pages.admission-process');
    }

    public function archived(){
        return view('pages.archived');
    }

    public function co_curricular_activities(){
        return view('pages.co-curricular-activities');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function curriculum(){
        return view('pages.curriculum');
    }

    public function facilities(){
        return view('pages.facilities');
    }

    public function faqs(){
        return view('pages.faqs');
    }

    public function guidance(){
        return view('pages.guidance');
    }

    public function history(){
        return view('pages.history');
    }

    public function photo(){
        return view('pages.photo');
    }

    public function portal(){
        return view('pages.portal');
    }

    public function programme_and_time(){
        return view('pages.programme-and-time');
    }

    public function school_activities(){
        return view('pages.school-activities');
    }

    public function school_anthem(){
        return view('pages.school-anthem');
    }

    public function school_calen(){
        return view('pages.school-calen');
    }

    public function school_hymn(){
        return view('pages.school-hymn');
    }

    public function school_organization(){
        return view('pages.school-organization');
    }

    public function social_guida(){
        return view('pages.social-guida');
    }

    public function spiritual(){
        return view('pages.spiritual');
    }

    public function staff(){
        return view('pages.staff');
    }

    public function visiting(){
        return view('pages.visiting');
    }

    public function welcome_message(){
        return view('pages.welcome-message');
    }

    public function news_events(){
        $news = News::all();
        $events = Event::all();
        return view('pages.news', compact('news', 'events'));
    }
}