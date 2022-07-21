@props(['image', 'model'])

<div class="col-sm-6 col-md-4 guitar">
    <img
        class="border-4 border-slate-200 hover:border-pink-500 dark:border-slate-700 dark:hover:border-pink-400 transition duration-500 ease-in-out"
        src="/img/music/guitars/{{ $image }}"
        alt="{{ $model }}"
        width="600" height="202"
    >
    <div class="mt-2 text-[14px] font-bold leading-5 text-slate-800 dark:text-slate-300">{{ $model }}</div>
</div>
