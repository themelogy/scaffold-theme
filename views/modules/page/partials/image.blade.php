{!! @$page->settings->image_position == 'bottom' ? $page->body : '' !!}
@if($page->files()->count()>0 && @$page->settings->show_image)
    <div class="image image-{{ @$page->settings->image_position ?? 'left' }}">
        <img class="img-responsive img-thumbnail"
             src="{{ $page->present()->firstImage(300,300,'resize',80) }}"
             alt="{{ $page->title }}"/>
    </div>
    @push('css-inline')
        <style type="text/css">
            @media screen and (max-width: 768px) {
                .image-left, .image-right {
                    margin-bottom: 20px;
                    float: none;
                }
            }

            @media screen and (min-width: 768px) {
                .image-bottom {
                    margin-bottom: 20px;
                    float: none;
                }
                .image-top {
                    margin-bottom: 20px;
                    float: none;
                }
                .image-left {
                    float: left;
                    margin: 0 20px 20px 0;
                }

                .image-right {
                    float: right;
                    margin: 0 0 20px 20px;
                }
            }
        </style>
    @endpush
@endif
{!! @$page->settings->image_position != 'bottom' ? $page->body : '' !!}