<?php

namespace Modules\Customers\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Customers\Models\Customers;
use Modules\Customers\Models\CustomersAddress;
use Carbon\Carbon;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        $customers = Customers::All();
        // Count all
        $custFindCount = Customers::All()->count();
        // Status
        $custFindBlock = Customers::where('status', 0)->count();
        $custFindActive = Customers::where('status', 1)->count();
        $custFindInactive = Customers::where('status', 2)->count();
        $custFindAtent = Customers::where('status', 3)->count();
        // Tipe
        $custFindFis = Customers::where('tipe', 0)->count();
        $custFindJur = Customers::where('tipe', 1)->count();
        // Tipe
        $custFindMas = Customers::where('gender', 0)->count();
        $custFindFem = Customers::where('gender', 1)->count();
        $custFindOrd = Customers::where('gender', 2)->count();
        // dates
        $date = new Carbon;
        // pegar cadastros di dia
        $custFindDay = Customers::where('created_at',  '>', $date->toDay()->toDateTimeString())->count();
        // pegar cadastros da semana
        $custFindWeek = Customers::where('created_at', '>', $date->subWeek()->toDateTimeString())->count();
        // pegar cadastros do ano
        $custFindYear = Customers::whereYear('created_at', '=', $date->format('Y'))->count();
            // ->latestFirst()
            // ->published()
            // ->paginate($this->limit);
        return view('customers::index', compact(
            'customers', 
            'custFindCount', 
            'custFindBlock', 
            'custFindActive', 
            'custFindInactive', 
            'custFindAtent',
            'custFindFis',
            'custFindJur',
            'custFindMas',
            'custFindFem',
            'custFindOrd',
            'custFindDay',
            'custFindWeek',
            'custFindYear',
            'dt'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('customers::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('customers::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('customers::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
