@props(['language', 'languageColors'])

<li class="flex p-2 w-full border-[1px] border-slate-200 dark:border-slate-700 transition duration-500 ease-in-out">
    <div class="inline-block text-xs">
        <span
            class="inline-block relative w-3 h-3 top-[1px] rounded-full"
            style="background-color: {{ $languageColors[$language] }};"
        ></span>
        @if ($language != "Yacc")
            {{ $language }}
        @else
            GameMaker
        @endif
    </div>
</li>
