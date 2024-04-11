<?php

namespace App\Http\Controllers\Admin\Logs;

use App\DataTables\Logs\SystemLogsDataTable;
use App\Http\Controllers\Controller;
use Jackiedo\LogReader\LogReader;

class SystemLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SystemLogsDataTable $dataTable)
    {
        $title = trans('System Log');
        return $dataTable->render('pages.dashboard.log.system.index', compact('title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, LogReader $logReader)
    {
        return $logReader->find($id)->delete();
    }
}
