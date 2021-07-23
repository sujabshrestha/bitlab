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
        $sliders = $this->cms->getGlobalPostByID(12);
        foreach ($sliders as $slider){
            $slider->sub_tile = $this->cms->getGlobalPostMetaByKey($slider,'sub-title');
        }
        $productCategories = $this->cms->getGlobalPostByID(8);
        $products = $this->cms->getGlobalPostByID(1, 6);
        foreach ($products as $product){
            $category_meta = $this->cms->getGlobalPostMetaByKey($product,'select-product-category');
            if ($category_meta){
                $product->parent_category =  implode(" ", unserialize($category_meta));
            }
        }

        $offers = $this->cms->getGlobalPostByID(9, 3);
        foreach ($offers as $offer){
            $offer->icon = $this->cms->getGlobalPostMetaByKey($offer,'icon');
        }
        $blogs = $this->cms->getGlobalPostByID(6, 5);
        $testimonials = $this->cms->getGlobalPostByID(10, 9);
        $teams = $this->cms->getGlobalPostByID(11, 10);
        foreach ($teams as $team){
            $team->degination = $this->cms->getGlobalPostMetaByKey($team,'degination');
        }
        return view('frontEnd.pages.home', compact('sliders', 'productCategories', 'products', 'offers', 'blogs', 'testimonials', 'teams'));
    }

    public function about(){
        $posttypeteam = PostType::where('slug','our-team')->first();
        $allteams = GobalPost::where('post_type',$posttypeteam->id)->get();
        $abouts = $this->cms->getGlobalPostByID(7);

            
        return view('frontEnd.pages.about', compact('abouts','allteams'));
    }

    public function ourcompany(){
        return view('frontEnd.pages.ourcompany');
    }

    public function ourservices(){
        return view('frontEnd.pages.ourservices');
    }

    public function news(){
        return view('frontEnd.pages.news');
    }

    public function units($slug){

        $postType = $this->cms->getGlobalPostTypeBySlug($slug);
        $posts = $this->cms->getGlobalPostByPostType($postType);
        return view('frontEnd.pages.unit', compact('postType', 'posts'));


    }


    public function unitSingle($post_type, $slug){
        $postType = $this->cms->getGlobalPostTypeBySlug($post_type);
        $posts = $this->cms->getGlobalPostByID($postType->id, 10);
        $unit = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.unitsingle', compact( 'unit', 'posts', 'postType'));
    }

    public function product(){

        $productCategories = $this->cms->getGlobalPostByID(8);
        $products = $this->cms->getGlobalPostByID(1);
        foreach ($products as $product){
            $category_meta = $this->cms->getGlobalPostMetaByKey($product,'select-product-category');
            if ($category_meta){
                $product->parent_category =  implode(" ", unserialize($category_meta));
            }
        }
        return view('frontEnd.pages.product', compact('products', 'productCategories'));


    }


    public function productSingle($slug){

        $product = $this->cms->getgobalPostBySlug($slug);
        $productdetails = $this->cms->getGlobalPostMetaByKey($product,'product-details');
        $product->brochure = $this->cms->getGlobalPostMetaByKey($product,'brochure');
        if($productdetails){
            $product->product_details = unserialize($productdetails);
        }
        return view('frontEnd.pages.product-single', compact('product'));
    }


    public function career(){
        $posts = $this->cms->getGlobalPostByID(5);
        return view('frontEnd.pages.career', compact( 'posts'));
    }

    public function blog(){
        $posttype = PostType::where('slug','blogs')->first();
        $allblogs = GobalPost::where('post_type',$posttype->id)->get();
        return view('frontEnd.pages.blog', compact( 'allblogs'));
    }

    public function blogSingle($slug){
        $posts = $this->cms->getGlobalPostByID(6, 5);
        $blog = $this->cms->getgobalPostBySlug($slug);
        return view('frontEnd.pages.blogsingle', compact( 'blog', 'posts'));
    }




    public function teamMember($id){

        $category = $this->cms->getGlobalPostSingleById($id);
        $member_meta = $this->cms->getGlobalPostMetaByKey($category,'members');
        $member_ids = unserialize($member_meta);
        if ($member_ids){
            $members = $this->cms->getGlobalPostMultipleByIds($member_ids);
            foreach ($members as $member){
                $member->designation = $this->cms->getGlobalPostMetaByKey($member, 'designation');
            }
            $category->members = $members;
        }

        return view('frontEnd.pages.memberPopup', compact('category'));
    }


    public function postModal($id){
        $post = $this->cms->getGlobalPostSingleById($id);
        return view('frontEnd.pages.postPopup', compact('post'));
    }

    public  function contact(){
        return view('frontEnd.pages.contact');
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


    public  function loan(){
        return view('frontEnd.pages.loan');
    }

    public function emi(){
        return view('frontEnd.pages.emi_page');
    }

}
