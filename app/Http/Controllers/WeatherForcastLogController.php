<?php

namespace App\Http\Controllers;

use App\Models\WeatherCondition;
use App\Models\WeatherForcastLog;
use App\Models\City;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class WeatherForcastLogController extends Controller
{

    public function UpdateForecast(Request $request, $id){
        $cities= City::all();
        $weather_conditions= WeatherCondition::all();
        if ($request->isMethod('post')){
            $weather_record = WeatherForcastLog::find($id);
            $weather_record->city_id=$request->input('city');
            $weather_record->weather_condition_id=$request->input('condition');
            $weather_record->temp=$request->input('temp');
            $weather_record->feels_like=$request->input('feels_like');
            $weather_record->humidity=$request->input('humidity');
            $weather_record->wind_speed=$request->input('wind_speed');
            $weather_record->created_at=$request->input('created_at');
            $weather_record->save();
            return redirect("history");
        }
        else{
            $weather_record = WeatherForcastLog::find($id);
            return view('forecast.update',['weather_record'=>$weather_record, 'cities'=>$cities, 'weather_conditions'=>$weather_conditions]);
        }
    }

    public function index(Request $request){

        $weather_records = WeatherForcastLog::orderBy('id', 'desc')->with(['city','weatherCondition'])->paginate(10);
        return view('history', ['weather_records' => $weather_records]);
    }

    public function search(Request $request){
        $search = $request->input('search');

        $to = date('Y-m-d h:i:s', strtotime($request->input('to')));
        $from = date('Y-m-d h:i:s', strtotime($request->input('from')));
        if($search) {
            $records = WeatherForcastLog::whereHas('city', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            })->orwhereHas('weatherCondition', function ($query) use ($request) {
                $query->where('main', 'like', '%' . $request->search . '%');
            })->orwhere('temp', '=', "{$search}")->paginate(100);
        }
        else {
            $records = WeatherForcastLog::whereBetween('created_at', [$from,$to])->paginate(100);
        }
        return view('search', compact('records'));
    }
}
