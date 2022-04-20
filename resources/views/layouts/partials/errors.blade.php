@if ($errors->any())
    <div class="p-4 border-l-4 bg-red-50 border-red-400">
        <div class="flex">
            @foreach ($errors->all() as $error)
                <p class="text-sm font-medium text-red-600">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif
