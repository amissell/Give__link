<?php


namespace App\Http\Controllers\Admin;
use App\Models\Organization;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $pendingOrganizationsCount = Organization::where('status', 'pending')->count();
        $approvedOrganizationsCount = Organization::where('status', 'approved')->count();
        $usersCount = User::count();
        $categoriesCount = Category::count();

        return view('dashboard', compact(
            'pendingOrganizationsCount',
            'approvedOrganizationsCount',
            'usersCount',
            'categoriesCount'
        ));
    }
}
