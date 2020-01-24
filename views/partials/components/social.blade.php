<ul class="social-icons-ul">
    @if(setting('theme::facebook'))
        <li>
            <a target="_blank" href="{{ setting('theme::facebook') }}">
                <span aria-hidden="true" class="social_facebook main-menu-icon"></span>
            </a>
        </li>
    @endif
    @if(setting('theme::twitter'))
        <li>
            <a target="_blank" href="{{ setting('theme::twitter') }}">
                <span aria-hidden="true" class="social_twitter main-menu-icon"></span>
            </a>
        </li>
    @endif
    @if(setting('theme::linkedin'))
        <li>
            <a target="_blank" href="{{ setting('theme::linkedin') }}">
                <span aria-hidden="true" class="social_linkedin main-menu-icon"></span>
            </a>
        </li>
    @endif
    @if(setting('theme::google'))
        <li>
            <a target="_blank" href="{{ setting('theme::google') }}">
                <span aria-hidden="true" class="social_googleplus main-menu-icon"></span>
            </a>
        </li>
    @endif
    @if(setting('theme::instagram'))
        <li>
            <a target="_blank" href="{{ setting('theme::instagram') }}">
                <span aria-hidden="true" class="social_instagram main-menu-icon"></span>
            </a>
        </li>
    @endif
    @if(setting('theme::youtube'))
        <li>
            <a target="_blank" href="{{ setting('theme::youtube') }}">
                <span aria-hidden="true" class="social_youtube main-menu-icon"></span>
            </a>
        </li>
    @endif
</ul>