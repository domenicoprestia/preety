<div class="flex p-4 border-b rounded border-green-500">
   <div class="m-2">
      <a href="{{route('profile', $preet->user->username)}}"></a>
   </div>
   <div class="">
      <a href="{{route('profile', $preet->user->username)}}">
         <h5 class="font-bold text-l mb-2">{{'@'.$preet->user->username}}</h5>
      </a>
      <p class="text-sm">{{$preet->body}}</p>
   <x-like-dislike :preet=$preet ></x-like-dislike>
</div>