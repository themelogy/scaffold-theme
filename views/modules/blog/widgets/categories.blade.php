@if($categories->count()>0)
<div class="title-lines-sidebar m-bot-30">
    <div class="title-block uppercase">
        {{ trans('blog::category.title.category') }}
    </div>
</div>
<ul class="nav bs-sidenav blog-categories m-bot-30">
    @foreach($categories as $category)
        <li @if(Request::segment(4) == $category->slug)class="current" @endif>
            <a href="{{ $category->url }}" class="uppercase">
                <span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span>
                {{ $category->name }}
            </a>
        </li>
    @endforeach
</ul>
@endif