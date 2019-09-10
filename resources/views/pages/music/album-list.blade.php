@if (!empty($albums))
    <h3 class="line-header"><span>{{ $sectionTitle }}</span></h3>
    <div class="row flex-row album-list">
        @foreach ($albums as $album)
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="media-object">
                    <a href="{{ $album->external_urls->spotify }}"><img class="img-responsive img-thumbnail" src="{{ $album->images[0]->url }}" alt="{{ $album->name }}" width="640" height="640"></a>
                    <div class="mo-info">
                        <a href="{{ $album->external_urls->spotify }}">{{ $album->name }}</a>
                    </div>
                    <div class="mo-meta ellipsis-one-line">
                        {{ $album->artists[0]->name }} <span class="text-muted">&middot; {{ Carbon\Carbon::parse($album->release_date)->format('M. Y') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
