<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
#use Illuminate\Support\Facades\Auth;
#use App\User;
class HomeController extends Controller
{
        
/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function index()
        {
                return view('admin.home');
        }
}
?>