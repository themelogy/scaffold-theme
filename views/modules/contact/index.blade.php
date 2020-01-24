@extends('layouts.master')

@section('content')
    @component('partials.components.breadcrumbs', ['breadcrumb'=>'contact', 'header_type'=>1])
        {!! trans('themes::contact.title') !!}
    @endcomponent

    <div class="title-lines-container m-top-min-35">
        <div class="container">

            <div class="row">
                <div class="col-md-6 m-bot-50">
                    @include('contact::form')
                </div>

                <div class="col-md-6 m-bot-50">

                    <div class="title-lines-2 m-bot-40">
                        <div class="title-block">
                            {{ trans('themes::contact.title') }}
                        </div>
                    </div>

                    <div class="contact-info-container wow fadeInRight" data-wow-duration="1100ms" >
                        <h3>{{ setting('theme::company-name') }}</h3>
                        <div class="contact-info-item-container m-bot-20">
                            <!-- Icon -->
                            <div class="contact-info-icon-container">
                                <span aria-hidden="true" class="icon_pin_alt contact-info-icon"></span>
                            </div>
                            <!-- <div class="contact-info-title">ADDRESS</div> -->
                            <h2 class="title-20">{{ trans('themes::contact.address') }}</h2>
                            <div class="contact-info-text">{!! setting('theme::address') !!}</div>
                        </div>
                        <div class="contact-info-item-container m-bot-20">
                            <!-- Icon -->
                            <div class="contact-info-icon-container">
                                <span aria-hidden="true" class="icon_phone contact-info-icon"></span>
                            </div>
                            <h2 class="title-20">{{ trans('themes::contact.phone') }}</h2>
                            <div class="contact-info-text">{{ setting('theme::phone') }}<br>{{ setting('theme::mobile') }}</div>
                        </div>
                        @if(setting('theme::fax'))
                        <div class="contact-info-item-container m-bot-20">
                            <!-- Icon -->
                            <div class="contact-info-icon-container">
                                <span aria-hidden="true" class="icon_printer contact-info-icon"></span>
                            </div>
                            <h2 class="title-20">{{ trans('themes::contact.fax') }}</h2>
                            <div class="contact-info-text">{{ setting('theme::fax') }}</div>
                        </div>
                        @endif
                        @if(setting('theme::email'))
                        <div class="contact-info-item-container m-bot-40">
                            <!-- Icon -->
                            <div class="contact-info-icon-container">
                                <span aria-hidden="true" class="icon_mail_alt contact-info-icon"></span>
                            </div>
                            <h2 class="title-20">{{ trans('themes::contact.email') }}</h2>
                            <div class="contact-info-text"><a class=" a-invert" href="mailto:{!! HTML::email(setting('theme::email')) !!}">{!! HTML::email(setting('theme::email')) !!}</a></div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Google Maps -->
    <div id="contact-link" class="google-map-container-footer" style="height: 350px;">
        @include('contact::map')
    </div>
    <!-- Google Maps / End -->
@endsection