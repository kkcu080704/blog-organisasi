<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Panggil Model Artikel
use App\Models\User; // Panggil Model User
use App\Models\Comment; // Panggil Model Komentar

class DashboardController extends Controller
{
    public function index()
    {

        $totalArticles = Post::count();

        $totalViews = Post::sum('views');

        $totalComments = Comment::count();

        return view('dashboard', [
            'totalArticles' => $totalArticles,
            'totalViews' => $totalViews,
            'totalComments' => $totalComments,
        ]);
    }
}