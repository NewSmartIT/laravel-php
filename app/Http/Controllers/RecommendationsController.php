<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecommendationsController extends Controller
{
    public function store(RecommendationRequest $request, Article $article, ArticleMailer $mailer)
    {
        $mailer->recommendTo($request->input('email'), $article);
 
        return ['Your recommendation was sent.'];
    }
}
