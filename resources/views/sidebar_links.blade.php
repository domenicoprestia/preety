<div class="bg-gray-200 rounded-lg p-4 pr-6 mt-4 shadow-lg">
   <ul>
      <p class="font-bold text-lg mb-4 block text-green-500">Sections</p>
      <li><a class="text-gray-800 font-bold text-lg mb-4 mt-2 block hover:text-green-500" href="{{route('home')}}">Home <i class="fa fa-home"></i></a></li>
      <li><a class="font-bold text-lg mb-4 block hover:text-green-500" href="{{route('profiles')}}">Explore <i class="fa fa-search"></i></a></li>
      <li><a class="font-bold text-lg mb-4 block hover:text-green-500" href="{{route('likedpreets')}}">Liked preets <i class="fa fa-recycle"></i></a></li>
      <li><a class="font-bold text-lg mb-4 block hover:text-green-500" href="{{route('profile', auth()->user()->username)}}">Profile <i class="fa fa-user-alt"></i></a></li>
      <p class="font-bold text-lg mb-4 block text-purple-500">Tools</p>
      <li><a class="font-bold text-lg mb-4 block hover:text-purple-500" href="https://gallant-mccarthy-49792d.netlify.app/" target="_blank">Check your air! 🌫️</a></li>
      <li><a class="font-bold text-lg mb-4 block hover:text-purple-500" href="{{route('schedules')}}">Scheduler 📰</a></li>
      <form method="POST" action="/logout">@csrf<button class="button font-bold text-lg hover:text-purple-500">Logout</button></form>
   </ul>
</div>