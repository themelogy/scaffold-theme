<div class="feature-box2-container font-color-change">
    <div class="container">
        <div class="row box-with-hover feature-box2">
            @foreach($children as $child)
            <div class="col-md-4 {!! $loop->first ? 'pad-r-0' : $loop->iteration == 2 ? 'pad-l-r-0' : 'pad-l-0'; !!}">
                <div class="ca-menu hovered">
                    <div class="ca-icon" style="background: url({{ $child->present()->firstImage(200,200,'fit',80) }}) no-repeat left center; background-size: cover;"><span aria-hidden="true" class="{{ @$child->settings->icon }}" style="color: lightblue; opacity: 0.5;"></span></div>
                    <div class="ca-content">
                        <h2 class="ca-main"><a href="{{ $child->url }}">{{ $child->title }}</a></h2>
                        <h4 class="ca-sub m-0">{{ @$child->settings->slogan->{locale()} }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@findPage('anasayfa', 'home')