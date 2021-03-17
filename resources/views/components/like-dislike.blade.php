
      <div class="flex items-center mt-1">
      <div>
      <form method="POST" action="/preets/{{$preet->id}}/like">
      @csrf
         <button type="submit"><i class="fa fa-thumbs-up {{$preet->isLikedBy(auth()->user()) ? 'text-green-400' : 'text-gray-400' }} hover:text-gray-500 fill-current mr-2 ml-1"></i><p class="text-xs text-gray-500 font-bold">{{$preet->likes ? $preet->likes : 0}}</p></button>
         </form>
         </div>
         <div>
         <form method="POST" action="/preets/{{$preet->id}}/like">
         @csrf 
         @METHOD('DELETE')
         <button type="submit"><i class="fa fa-thumbs-down  {{$preet->isDislikedBy(auth()->user()) ? 'text-green-400' : 'text-gray-400' }} hover:text-gray-500 fill-current mr-2 ml-1"></i><p class="text-xs text-gray-500 font-bold ">{{$preet->dislikes ? $preet->dislikes : 0}}</p></button>
         </form>
         </div>
      </div>
   </div>