<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\NationalCodeResource;
use App\Models\Category;
use App\Models\NationalCode;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class WorkController extends Controller
{
//    public function relation($porya)
//    {
//        $user = User::find(10);
//        $nationalCode = NationalCode::find(10);
//        return $nationalCode->user;
//    }

    public function getNationalCodeByUser(User $person): NationalCodeResource
    {
        return new NationalCodeResource($person->nationalCode()->first());
    }

    public function getUserByNationalCode(NationalCode $nationalCode): User
    {
        return $nationalCode->user()->first();
    }

    public function getPostsByUser(User $user): \Illuminate\Database\Eloquent\Collection
    {
        return $user->posts()->get();
    }

    public function getUserByPost(Post $post): User
    {
        return $post->user()->first();
    }

    public function getCategoriesByPost(Post $post): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {

        //for collection: sampleResource::collection([])
        //for single data: new sampleResource([])
        return CategoryResource::collection($post->categories()->get());
    }

    public function getPostsByCategory(Category $category): \Illuminate\Database\Eloquent\Collection
    {
        return $category->posts()->get();
    }
}
