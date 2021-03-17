<form method="POST" action="/profiles/{{$user->username}}/follow">
   @csrf
   <button type="submit" class="bg-green-400 rounded-full py-2 px-2 text-white text-xs ml-2">{{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
   </button>
</form>