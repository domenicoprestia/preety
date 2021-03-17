<?php

namespace App\Http\Controllers;

use App\Models\Preet;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function show(){
        $schedules = auth()->user()->schedules_today;
        return view('schedule.show', compact('schedules'));
    }

    public function show_all(){
        $schedules = auth()->user()->schedules;
        return view('schedule.showall', compact('schedules'));
    }

    public function create(){
        return view('schedule.create');
    }

    public function store(){
        $start_time = str_split(request('start_time'), 6);
        $end_time = str_split(request('end_time'), 6);
        $start = trim($start_time[0], ',');
        $end = trim($end_time[0], ',');
        if($start_time[1] < $end_time[1]){
            $assignments = request()->validate(['start_time' => 'required', 'end_time' => 'required', 'day' => 'required', 'type' => 'required']);
            $schedule = new Schedule();
            $schedule->user_id = auth()->user()->id;
            $schedule->start_time =  $start;
            $schedule->end_time = $end;
            $schedule->day = $assignments['day'];
            $schedule->type = $assignments['type'];
            $schedule->save();
            return redirect(route('schedulesall'));
        }else{
        return redirect(route('schedulesall'));
        }
    }

    public function destroy($id){
        Schedule::find($id)->delete();
        return back();
    }
}
