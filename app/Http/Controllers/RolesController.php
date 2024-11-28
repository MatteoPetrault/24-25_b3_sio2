<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Role;
class RolesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $roles = Role::all();
    return view('roles.index', compact('roles'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'label' => 'required|max:50',
    ]);
    role::create($request->all());
    return redirect()->route('roles.index')
      ->with('success', 'role created successfully.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
{

    $request->validate([
        'label' => 'required|max:50',
    ]);
//cherche le role a maj
    $role = Role::find($id);
    $role->update($request->all());
    return redirect()->route('roles.index');
}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      // Trouver le rôle par ID
      $role = Role::find($id);
      $role->delete();
      return redirect()->route('roles.index');
  }
  
  // routes functions
  /**
   * Show the form for creating a new role.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('roles.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $role = role::find($id);
    return view('roles.show', compact('role'));
  }
  /**
   * Show the form for editing the specified role.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $role = role::find($id);
    return view('roles.edit', compact('role'));
  }
}