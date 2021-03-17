<div class="p-10 ">
    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-purple-500 text-white">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$schedule->day}}</div>
        <p class="text-white text-base">
            {{$schedule->start_time}} - {{$schedule->end_time}} 
            <div class="flex">
        </p><p class="font-bold flex-1">{{$schedule->type}}</p><a href="/schedules/{{$schedule->id}}/delete"><i class="fa fa-trash w/1-9"></i></a>
        </div>
      </div>
    </div>
  </div>