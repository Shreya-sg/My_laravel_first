<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Custompost;
use App\Models\Post;

class HomeController extends Controller
{
    public function home(){
        $page_title= "Home";
        $page_short_description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit";
        $page_sub_heading= "How To Manage Risks in Your Life";
        $page_sub_description= "Do you want to reach your full potential? A big part of that, I believe, is managing your risks. There are risks in different parts of your life, and the better you manage them, the better your chance to move forward in life. Not managing your risks well, on the other hand, could cause you a big headache down the road.";
        $page_sub_heading_second ="A Key to Being Creative Like Leonardo da Vinci";
        $page_sub_heading_second_des ="What is the key to being creative? What is the factor behind it? I believe that the answer to this question is important. After all, being creative is essential in this age of automation. More and more routine tasks are being automated, so your creativity can make the difference between thriving and sinking.";

        $home_nav = array('Home', 'About', 'Contact', 'Privacy Policy');
        $home_post =array (
            array('title'=> 'Lorem Ispum', 'Description'=> 'The hallmark of originality is rejecting the default and exploring whether a better option exists'),
            array('title'=> 'Lorem Ispum', 'Description'=> 'The hallmark of originality is rejecting the default and exploring whether a better option exists'),
            array('title'=> 'Lorem Ispum',  'Description'=> 'The hallmark of originality is rejecting the default and exploring whether a better option exists'),
            array('title'=> 'Lorem Ispum', 'Description'=> 'The hallmark of originality is rejecting the default and exploring whether a better option exists')
        );
        return view('home', compact('home_nav','page_title', 'page_short_description', 'page_sub_heading', 'page_sub_description', 'page_sub_heading_second','page_sub_heading_second_des', 'home_post'));
    }


    public function about(){
        $about_title= "About";
        // dd($about_title);
        $about_short_description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit";
        $about_sub_heading= "How To Manage Risks in Your Life";
        $about_sub_description= "Do you want to reach your full potential? A big part of that, I believe, is managing your risks. There are risks in different parts of your life, and the better you manage them, the better your chance to move forward in life. Not managing your risks well, on the other hand, could cause you a big headache down the road.";
        $about_sub_heading_second ="A Key to Being Creative Like Leonardo da Vinci";
        $about_sub_heading_second_des ="What is the key to being creative? What is the factor behind it? I believe that the answer to this question is important. After all, being creative is essential in this age of automation. More and more routine tasks are being automated, so your creativity can make the difference between thriving and sinking.";
    

        $post = custompost::get();
        // dd($post);
        return view('about', compact('about_title', 'about_short_description', 'about_sub_heading', 'about_sub_description', 'about_sub_heading_second','about_sub_heading_second_des',));    
    }

    public function contact(){
        $contact_title= "Contact Us";
        $contact_short_description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit";
        $contact_sub_heading= "Contact Us On";
        $contact_sub_description= "Do you want to reach your full potential? A big part of that, I believe, is managing your risks. There are risks in different parts of your life, and the better you manage them, the better your chance to move forward in life. Not managing your risks well, on the other hand, could cause you a big headache down the road.";

        return view('contact', compact('contact_title', 'contact_short_description', 'contact_sub_heading', 'contact_sub_description'));  
        
    }

    public function posts($slug){
        $post= Custompost::Where('post_slug', $slug)->firstorFail();
        // dd($post);
        return view('post', compact('post'));  
        return $slug;
    }



    public function blog_post(){
        $about_title= "Post";
        // dd($about_title);
        $about_short_description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit";
        $about_sub_heading= "How To Manage Risks in Your Life";
        $about_sub_description= "Do you want to reach your full potential? A big part of that, I believe, is managing your risks. There are risks in different parts of your life, and the better you manage them, the better your chance to move forward in life. Not managing your risks well, on the other hand, could cause you a big headache down the road.";
        $about_sub_heading_second ="A Key to Being Creative Like Leonardo da Vinci";
        $about_sub_heading_second_des ="What is the key to being creative? What is the factor behind it? I believe that the answer to this question is important. After all, being creative is essential in this age of automation. More and more routine tasks are being automated, so your creativity can make the difference between thriving and sinking.";
    
        $blog = Post::get();
        // dd($blog);
        return view('post', compact('blog','about_title', 'about_short_description', 'about_sub_heading', 'about_sub_description', 'about_sub_heading_second','about_sub_heading_second_des',));    
    }

    public function blog_post_single($slug){
        $postslug =Post::Where('post_slug',$slug)->get();
        // dd($postslug);
        return view('postsingle', compact('postslug'));    
    }

}
