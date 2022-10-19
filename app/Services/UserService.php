<?php

namespace App\Services;

use App\Models\User;
use Yajra\DataTables\DataTables;

class UserService
{

    protected $user;

    public function __construct(User $user)
    {

        $this->user = $user;

    }

    public function get($request)
    {

        $data = $this->user->latest()->get();
        return Datatables::of($data) ->addIndexColumn()->make(true);

    }
}
