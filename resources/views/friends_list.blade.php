<div class="bg-green-300 rounded-lg p-4 pr-10 mt-4 shadow-lg ">
<h3 class="font-bold text-xl mb-4 mt-2">Prettiers <i class="fa fa-users"></i></h3>

<ul>
@forelse(auth()->user()->follows  as $user)
   <li>
   
      <div class="flex items-center text-sm mb-3">
      <a href="{{route('profile', $user->username)}}" class="flex items-center text-sm">
         {{$user->name}}</a>
      </div>
   </li>
   @empty
   <p>No friends yet!</p>
@endforelse
</ul>
</div>