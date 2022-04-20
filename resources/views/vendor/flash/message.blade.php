@foreach (session('flash_notification', collect())->toArray() as $message)
    @php
        $bgClass = "bg-blue-50 border-blue-400";
        $textClass = "text-blue-700";

        if ($message['level'] === "success") {
            $bgClass = "bg-green-50 border-green-400";
            $textClass = "text-green-700";
        }
        else if ($message['level'] === "warning") {
            $bgClass = "bg-yellow-50 border-yellow-400";
            $textClass = "text-yellow-700";
        }
    @endphp
    <div class="p-4 border-l-4 {{ $bgClass }}">
        <div class="flex">
            <p class="text-sm font-medium {{ $textClass }}">{!! $message['message'] !!}</p>
        </div>
    </div>
@endforeach

{{ session()->forget('flash_notification') }}
