@php
  $start = \Carbon\Carbon::parse($show->festival_start_date);
  $end = \Carbon\Carbon::parse($show->festival_end_date);
  $isMultiDay = !$start->isSameDay($end);
  $showUrl = $show->url . '&mkt_source=colbydude.com';
  $ticketUrl = $show->offers[0]->url ?? null;
@endphp

<div class="flex items-center justify-between w-full py-4 border-b border-slate-200 dark:border-slate-700 transition duration-500 ease-in-out">
    {{-- Date and Info --}}
    <div class="flex flex-grow items-center space-x-4">
        <div class="flex flex-col items-center min-w-[60px]">
            <div class="flex space-x-1 text-xs">
                <span>{{ strtoupper($start->format('M')) }}</span>
                @if ($isMultiDay)
                    <span>{{ strtoupper($end->format('M')) }}</span>
                @endif
            </div>
            <div class="flex space-x-1 text-lg font-semibold">
                <span>{{ $start->format('d') }}</span>
                @if ($isMultiDay)
                    <span>-</span>
                    <span>{{ $end->format('d') }}</span>
                @endif
            </div>
        </div>

        <div class="flex flex-col text-slate-800 dark:text-slate-300">
            <x-link href="{{ $showUrl }}" class="font-semibold">{{ $show->title }}</x-link>
            <span class="text-sm text-slate-800 dark:text-slate-300 transition duration-500 ease-in-out">
                {{ $show->artist_name }} <span class="text-slate-500 dark:text-slate-400">&middot; {{ $show->venue->location }}</span>
            </span>
        </div>
    </div>

    {{-- Buttons --}}
    <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 w-auto">
        @if ($ticketUrl)
            <x-btn-outline class="w-full sm:w-auto text-center" href="{{ $ticketUrl }}&mkt_source=colbydude.com">Tickets</x-btn-outline>
        @endif
        <x-btn-outline class="w-full sm:w-auto text-center" href="{{ $showUrl }}">RSVP</x-btn-outline>
    </div>
</div>
