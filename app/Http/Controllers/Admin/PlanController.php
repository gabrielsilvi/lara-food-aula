<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;


class PlanController extends Controller
{
    private $repoistory;

    public function __construct(Plan $plan)
    {
       $this->repoistory = $plan;
    }

    public function index(){
        $plans = $this->repoistory->paginate();
        return view('admin.pages.plans.index', ['plans' => $plans,]); 

    }
}
