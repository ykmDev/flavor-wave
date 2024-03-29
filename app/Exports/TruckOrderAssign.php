<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class TruckOrderAssign implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() :View
    {
        return view('mail.truck',[
            'users' => User::all()
        ]);
    }
}
