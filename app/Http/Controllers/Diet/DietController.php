<?php

namespace App\Http\Controllers\Diet;

use App\Facades\DietFacade as DietService;
use App\Facades\DayFacade as DayService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiet;
use App\Models\Diet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DietController extends Controller
{
    
    public function index()
    {
        return view('diet.index', ['diets' => Diet::all()->where('user_id', Auth::user()->id)]);
    }


    public function create()
    {
        return view('diet.create');
    }


    public function store(StoreDiet $request)
    {
        $diet = DietService::createDiet($request, Auth::user()->id);
        
        DayService::createDays($diet, DietService::createDietDates($diet), DietService::calculateDailyWeightLoss($diet));
        
        return redirect()->route('diet.index', ['diets' => Diet::all()->where('user_id', Auth::user()->id)])->withStatus('Diet Successfully created!');
    } 

    
    public function show(Diet $diet)
    {
        //
    }

    
    public function edit(Diet $diet)
    {
        //
    }

    
    public function update(Request $request, Diet $diet)
    {
        //
    }

   
    public function destroy(Diet $diet)
    {
        //
    }
}
