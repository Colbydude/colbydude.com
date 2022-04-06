@props(['name', 'image' => null, 'video' => null])

<div class="grid gap-2 md:grid-cols-2 md:gap-6 mb-6">
    <div>
        @if ($video != null)
            <video class="block mx-auto" playsinline="" muted="" loop="" autoplay="autoplay">
                <source src="{{ $video }}" type="video/mp4">
            </video>
        @elseif ($image != null)
            <img class="block mx-auto" src="{{ $image }}" alt="{{ $name }}" width="2560" height="1440" />
        @endif
    </div>
    <div class="text-[14px]">
        <h4 class="my-3 text-lg text-slate-800 dark:text-slate-300 transition duration-500 ease-in-out">{{ $name }}</h4>
        {{ $slot }}
    </div>
</div>
