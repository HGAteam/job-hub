<?php

namespace App\Http\Controllers\Admin\Ecommerce\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_view()
    {
        return view('pages.dashboard.apps.ecommerce.reports.view');
    }

    public function index_sales()
    {
        return view('pages.dashboard.apps.ecommerce.reports.sales');
    }

    public function index_returns()
    {
        return view('pages.dashboard.apps.ecommerce.reports.returns');
    }
    public function index_customer_orders()
    {
        return view('pages.dashboard.apps.ecommerce.reports.customer-orders');
    }
    public function index_shipping()
    {
        return view('pages.dashboard.apps.ecommerce.reports.shipping');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
