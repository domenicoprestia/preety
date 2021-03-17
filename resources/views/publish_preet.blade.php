<div class="border border-green-500 rounded-lg p-6 bg-white">
   <form method="POST" action="/preets">
      @csrf
      <textarea name="body" class="form-textarea w-full border-transparent rounded focus:border-green-500 hover:border-green-500" placeholder="What's up?"></textarea>
      <hr class="my-4">
      <footer class="flex justify-between">
         <button type="submit" class="bg-green-400 rounded-lg shadow py-2 px-2 text-white animate-pulse">Preet it 🌳</button>         
      </footer>
   </form> 
   <div>
      @error('body')
      <p class="text-red-600 text-sm mt-2">{{$message}}</p>
      @enderror
   </div>