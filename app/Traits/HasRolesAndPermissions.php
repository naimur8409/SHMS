<?php
namespace App\Traits;

use App\Models\Role;
trait HasRolesAndPermissions
{
    /**
     * Roles
     */


    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }


    public function hasRole(... $roles ) {
        foreach ($roles as $role) {
            if ($this->roles->contains('name', $role)) {
                return true;
            }
        }
        return false;
    }


    }
