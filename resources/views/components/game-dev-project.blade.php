<div class="mb-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" playsinline="" muted="" loop="" autoplay="autoplay">
                    <source src="{{ $video }}" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="col-lg-6">
            <h4>{{ $name }}</h4>
            {{ $slot }}
        </div>
    </div>
</div>