<div class="col-md-3">

    @blogCategories()

    <!-- TABS  -->
    <div class="tabs custom-tabs m-bot-30">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab1" data-toggle="tab">{{ trans('themes::blog.popular') }}</a>
            </li>
            <li>
                <a href="#tab2" data-toggle="tab">{{ trans('themes::blog.latest') }}</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="tab1" class="tab-pane tab-pop-cat-container active">
                @blogPopularPosts(5, 'sidebar-posts')
            </div>
            <div id="tab2" class="tab-pane tab-pop-cat-container">
                @blogLatestPosts(5, 'sidebar-posts')
            </div>
        </div>
    </div>

    @isset($post)
        @blogTags($post, 5)
    @endisset
    @isset($posts)
        @blogTags($post, 5)
    @endisset

</div>