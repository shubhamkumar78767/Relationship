<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function hasone()
    {
        $user = User::with('contact')->find(1);
        return($user->toArray());
    }

    public function belongsToOne()
    {
        $contact = Contact::with('user')->find(1);
        return($contact->toArray());
    }

    public function hasmany()
    {
        $user = User::with(['contact','posts'])->find(1);
        return($user->toArray());
    }

    public function belongsToMany()
    {
        $post = Post::with(['user'])->find(1);
        return($post->toArray());
    }

    public function ManyToManyCategory(){

        $datas = Post::with('categories')->find(1);
        return($datas->toArray());
    }

    public function ManyToManyPost(){
        
        $datas = Category::with('posts')->find(1);
        return($datas->toArray());
    }
}
