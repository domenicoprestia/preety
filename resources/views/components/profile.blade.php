<div class="flex p-4 border border-transparent">
<div class="m-2">
         <a href="{{route('profile', $user->username)}}"></a>
         </div>
         <div class="m-2 mt-8">
         <a href="{{route('profile', $user->username)}}" class="hover:text-purple-400"><h5 class="font-bold text-s"> {{'@'.$user->username}}</h5></a>
         </div>
</div>