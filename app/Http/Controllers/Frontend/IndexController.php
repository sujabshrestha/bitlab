<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Model\Contact;
use App\Repositories\FrontCms\CmsInterface;
use App\Repositories\FrontCms\CmsRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Model\GobalPost;
use App\Model\GobalPostMeta;
use App\Model\PostType;

class IndexController extends Controller
{
    protected $cms;
    public function __construct(CmsInterface $cms)
    {
        $this->cms = $cms;
    }

    public function home(){

        $allblogs = $this->cms->getGlobalPostByID(7, 5);

        $alltestomonials = $this->cms->getGlobalPostByID(6);
        $allwhatwedo =  $this->cms->getGlobalPostByID(4);
        $allsliders = $this->cms->getGLobalPostById(1,3);

        foreach($allsliders as $slider){
            $slider->links = $this->cms->getGlobalPostMetaByKey($slider,'links');
        }
        $allequipments = $this->cms->getGlobalPostByID(5,4);


        return view('frontEnd.pages.home',compact('alltestomonials','allblogs','allsliders','allwhatwedo','allequipments'));
    }

    public function about(){
        $allteams = $this->cms->getGlobalPostByID(9, 5);
        $alltestomonials = $this->cms->getGlobalPostByID(6);

        return view('frontEnd.pages.about', compact('allteams','alltestomonials'));
    }

    public function ourcompany(){
        $companies = $this->cms->getGlobalPostByID(3);
        foreach ($companies as $company){
            $companyKeys= $this->cms->getGlobalPostMetaByKey($company,'key-points');
            $company->background_image = $this->cms->getGlobalPostMetaByKey($company,'banner-image');
            $company->subtitle= $this->cms->getGlobalPostMetaByKey($company,'subtitle');
            if(unserialize($companyKeys)){
                $company->companyKeys = unserialize($companyKeys);
            }
        }
        $alltestomonials = $this->cms->getGlobalPostByID(6);
        return view('frontEnd.pages.ourcompany',compact('companies','alltestomonials'));
    }

    public function ourservices(){
        $allteams = $this->cms->getGlobalPostByID(9, 5);
        $alltestomonials = $this->cms->getGlobalPostByID(6);
        return view('frontEnd.pages.ourservices',compact('allteams','alltestomonials'));
    }

    public function blogSingle($slug){
        $blog = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.single',compact('blog'));
    }

    public function news(){
        $alltestomonials = $this->cms->getGlobalPostByID(6);
        $allarticles = $this->cms->getGlobalPostByID(10,6);

        return view('frontEnd.pages.news',compact('alltestomonials','allarticles'));
    }


    public function blog(){

        $allblogs = $this->cms->getGlobalPostByID(7,6);
        $alltestomonials = $this->cms->getGlobalPostByID(6);

        return view('frontEnd.pages.blog', compact( 'allblogs','alltestomonials'));
    }

    public  function contact(){
        $alltestomonials = $this->cms->getGlobalPostByID(6,5);
        return view('frontEnd.pages.contact',compact('alltestomonials'));
    }

    public function submitContact(StoreContactRequest $request){
        $contact = Contact::create($request->only(['name','email','phone','subject','message']));
        if($contact){
            Toastr::success('We will contact you soon.','Thank you for your submission!');
            return redirect()->back();
        }else{
            Toastr::error('Please Try Again Later','Failed to Submit');
            return redirect()->back();
        }
    }



}
