<?php

namespace App\Http\Controllers;

use App\Models\AdmissionNotice;
use App\Models\News;
use App\Models\Event;
use App\Models\AdmissionForm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $admissionNotices = AdmissionNotice::all();
        $admissionForms = AdmissionForm::all();
        $news = News::all();
        $events = Event::all();
        
        return view('home', compact('admissionNotices', 'admissionForms', 'news', 'events')); 
    }
}