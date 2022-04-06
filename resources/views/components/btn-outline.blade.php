<a {{ $attributes->merge(['class' => 'bg-transparent border border-pink-500 text-pink-500 dark:text-pink-400 dark:border-pink-400 cursor-pointer inline-block text-[14px] py-[6px] px-3 text-center touch-manipulation hover:bg-pink-800/20 dark:hover:bg-pink-700/20 transition duration-500 ease-in-out']) }}>
    {{ $slot }}
</a>
