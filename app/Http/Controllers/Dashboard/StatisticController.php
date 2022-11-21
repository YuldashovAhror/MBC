<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $statistic = Statistic::find(1);
        return view('dashboard.statistics.index', compact('statistic'));
    }

    public function store(Request $request)
    {
        $statistic = new Statistic();

        $statistic->year = $request->year;
        $statistic->project = $request->project;
        $statistic->family = $request->family;
        $statistic->area = $request->area;
        $statistic->save();

        return redirect()->route('admin.statistics')->withErrors(['message' => 'success']);
    }

    public function update(Request $request, $id)
    {
        Statistic::find($id)->update($request->all());
        // $request->session()->flash('message', 'success');

        return back();
    }
}
