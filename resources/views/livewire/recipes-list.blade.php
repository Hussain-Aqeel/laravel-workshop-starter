<div>
    <div class="grid grid-cols-3 gap-2">
        @foreach($recipes as $recipe)
            <div class="bg-slate-100 p-4">
                <img class="h-[30em]" src="{{ asset('storage'. $recipe->image) }}" alt="">
                <h1 class="m-4">{{ $recipe->name }}</h1>
                <p class="p-2 bg-gray-400">{{ $recipe->category->name }}</p>
            </div>
        @endforeach
    </div>
</div>
