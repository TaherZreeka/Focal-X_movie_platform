<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // عرض المشتركين 
public function users()
{
    $users = User::where('role', 'user')->get();
    return view('admin.users.index', compact('users'));
}

// عرض مسؤولي المحتوى 
public function contentManagers()
{
    $contentManagers = User::where('role', 'content')->get();
    return view('admin.content.index', compact('contentManagers'));
}

     //  إضافة مستخدم (محتوى أو مشترك)
     public function createUser()
     {
         return view('admin.users.create');
     }
 
     public function storeUser(Request $request)
     {
         $request->validate([
             'name' => 'required|string',
             'email' => 'required|email|unique:users',
             'password' => 'required|string|min:6',
             'role' => 'required|in:user,content',
         ]);
 
         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password),
             'role' => $request->role,
         ]);
 
         return redirect()->route('admin.users.index')->with('success', 'تمت إضافة المستخدم بنجاح');
     }
 
     //  تعديل مستخدم
     public function editUser($id)
     {
         $user = User::findOrFail($id);
         return view('admin.users.edit', compact('user'));
     }
 
     public function updateUser(Request $request, $id)
     {
         $user = User::findOrFail($id);
 
         $request->validate([
             'name' => 'required|string',
             'email' => 'required|email|unique:users,email,' . $user->id,
             'role' => 'required|in:user,content',
         ]);
 
         $user->update([
             'name' => $request->name,
             'email' => $request->email,
             'role' => $request->role,
         ]);
 
         return redirect()->route('admin.users.index')->with('success', 'تم تعديل المستخدم');
     }
 
     //  حذف مستخدم
     public function deleteUser($id)
     {
         $user = User::findOrFail($id);
         $user->delete();
 
         return redirect()->route('admin.users.index')->with('success', 'تم حذف المستخدم');
     }
 
     //  عرض تقرير الأفلام الأعلى مشاهدة أو الأعلى تقييماً
     public function reports()
     {
         $topRated = Movie::withAvg('ratings', 'rating')->orderByDesc('ratings_avg_rating')->take(10)->get();
         $mostViewed = Movie::orderByDesc('views')->take(10)->get();
 
         return view('admin.reports.index', compact('topRated', 'mostViewed'));
     }
}
