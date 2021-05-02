<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Upcoming;
use App\Models\Today;
use App\http\Resources\UpcomingTaskResource;
use App\http\Resources\TodayTaskResource;
use Illuminate\Support\Facades\DB;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// upcoming task
Route::get("/upcoming", function (){
   $upcoming = Upcoming::all();

   return UpcomingTaskResource::collection($upcoming);
});

// create an upcomingTask

Route::post('upcoming', function(Request $request){
   $create = Upcoming::create([
        'title' => $request->title,
        'waiting' => $request->waiting,
        'taskID' => $request->taskID ]);
    if ($create) {
        return 200;
    }
  
});

// delete upcoming

Route::delete('/upcoming/{taskid}',function($taskid){
   $delete = DB::table('upcomings')->where('taskID', $taskid)->delete();
   if ($delete) {
     return 200;
   }
});





// get Today task

Route::get("/dailytask", function (){
   
    $upcoming = Today::all();
    return TodayTaskResource::collection($upcoming);
});



// create Today task

Route::post('/dailytask', function (Request $request){
   $create = Today::create([
       'title' =>$request->title,
       'taskID' => $request->taskID
   ]);

   if ($create) {
     return 200;
   }
});


// delete Today task

Route::delete('/dailytask/{taskid}',function($taskid){
    $delete = DB::table('todays')->where('taskID', $taskid)->delete();
    if ($delete) {
      return 200;
    }
 });
 


