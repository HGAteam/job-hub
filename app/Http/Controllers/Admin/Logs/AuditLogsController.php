<?php

namespace App\Http\Controllers\Admin\Logs;

use App\DataTables\Logs\AuditLogsDataTable;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class AuditLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuditLogsDataTable $dataTable)
    {
        $title = trans('Audit Log');
        return $dataTable->render('pages.dashboard.log.audit.index', compact('title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);

        // Delete from db
        $activity->delete();
    }
}
