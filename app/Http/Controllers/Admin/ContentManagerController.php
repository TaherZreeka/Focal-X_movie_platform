<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateContentRoleRequest;
use App\Models\User;

class ContentManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contentManagers = User::where('role', 'content')->get();
        return view('admin.content.index', compact('contentManagers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)

    {
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.content.index')->with('success', 'تمت إضافة مسئول المحتوى بنجاح');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('role', 'content')->findOrFail($id);
        return view('admin.content.show', compact('user'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.content.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContentRoleRequest $request, $id)
    {
      
           $user = User::findOrFail($id);
       
           $user->update([
               'role' => $request->role,
           ]);
       
            return redirect()->route('admin.content.index')->with('success', 'تم تعديل الدور بنجاح');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
         $user->delete();
 
         return redirect()->route('admin.content.index')->with('success', 'تم حذف المستخدم');
     }
    }

