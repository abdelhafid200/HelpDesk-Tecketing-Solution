<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\Permission;
use App\Http\Requests\StoreRoleRequest;

class RoleController extends Controller
{

    /**
     *
     *
     */
    public function index()
    {
        return view('dashboard.role.index', [ 'roles' => Role::orderBy('is_touchable')->get() ]);
    }

    /**
     * Show the form to add new role
     *
     */
    public function create()
    {
        $permissions = Permission::all()->groupBy('category');
        return view('dashboard.role.create', compact('permissions'));
    }

    public function view($id) {

        $role = Role::findOrFail($id);
        return view('dashboard.role.view', compact('role'));

    }

    /**
     *
     *
     */
    public function store(StoreRoleRequest $request)
    {

        $role = new Role;
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();

        foreach ($request->permissions as $p) {
            $permission = new RolePermission;
            $permission->permission_id = $p;
            $permission->role_id = $role->id;
            $permission->save();
        }

        return to_route('dashboard.role.index')->with('success', 'Le rôle a été créer avec succès');


    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all()->groupBy('category');
        return view('dashboard.role.edit', compact('role', 'permissions'));
    }

    public function update(StoreRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();

        // Delete the removed permissions and store new selected ones
        // and associate theim to role
        $role->permissions()->sync($request->permissions);

        return to_route('dashboard.role.index')->with('success', 'Le rôle a été modifié avec succès');

    }

    public function delete($id)
    {

        $role = Role::findOrFail($id);

        $role->delete();

        return to_route('dashboard.role.index')->with('sucess', 'Le rôle a été supprimé avec succès');

    }

}
