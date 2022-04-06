@props(['repo', 'languageColors'])

<li class="flex p-4 w-full border-[1px] border-slate-200 dark:border-slate-700 transition duration-500 ease-in-out">
    <div class="flex flex-col w-full">
        <div class="flex items-center relative w-full">
            @svg('fontawesome/github', 'mr-2 flex-shrink-0 w-[14px] h-[14px] text-slate-800 dark:text-slate-300 transition duration-500 ease-in-out')
            <x-link
                class="text-[14px] font-semibold flex-auto"
                href="https://github.com{{ $repo->node->resourcePath }}"
            >
                {{ $repo->node->name }}
            </x-link>
        </div>
        <p class="flex-[1_0_auto] text-xs mt-2 mb-4">
            {{ $repo->node->description }}
        </p>
        <div class="text-xs">
            <span class="inline-block mr-4">
                <span
                    class="inline-block relative w-3 h-3 top-[1px] rounded-full"
                    style="background-color: {{ $languageColors[$repo->node->primaryLanguage->name] }};"
                >
                </span>
                @if ($repo->node->primaryLanguage->name != "Yacc")
                    {{ $repo->node->primaryLanguage->name }}
                @else
                    GameMaker
                @endif
            </span>
            @if ($repo->node->stargazers->totalCount > 0)
                <a class="inline-block mr-4" href="https://github.com{{ $repo->node->resourcePath }}/stargazers" rel="noopener" target="_blank">
                    @svg('fontawesome/star', 'inline-block -mt-[3px] w-[15px] h-[15px]') {{ $repo->node->stargazers->totalCount }}
                </a>
            @endif
            @if ($repo->node->forkCount > 0)
                <a class="inline-block mr-4" href="https://github.com{{ $repo->node->resourcePath }}/network/members" rel="noopener" target="_blank">
                    @svg('fontawesome/code-branch', 'inline-block -mt-[3px] w-[15px] h-[15px]') {{ $repo->node->forkCount }}
                </a>
            @endif
        </div>
    </div>
</li>
