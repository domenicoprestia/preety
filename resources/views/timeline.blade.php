</div>
      <div class="mt-4 border-t border-r border-l border-green-500 bg-white rounded-lg">
         @forelse($preets as $preet)
         @include('preet')
         @empty
            <p class="p-4">No preets yet!</p>
         @endforelse
      </div>
   </div>