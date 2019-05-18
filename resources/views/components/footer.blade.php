<footer class="footer footer-black footer-big">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget widget_text">
                        <h5>@lang('strings.somos_titulo1')</h5>
                        <div class="textwidget">
                            <p>@lang('strings.somos_text1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget widget_text">
                        <h5>Social Media Feed</h5>
                        <div class="textwidget">
                            <ul class="fetched_tweets light">
                                @foreach ($twitterArray as $tweet)
                                <li class="tweets_avatar">
                                    <div class="tweet_wrap">
                                        <div class="ltr">
                                            <div class="clear"></div>
                                        </div>
                                        <div class="tweet_data {{$tweet['source']=='facebook'?'facebook':''}}">{{$tweet['data']}}</div>
                                        <br />
                                        <div class="clear"></div>
                                        <div class="times"> <em> <a href="{{$tweet['url']}}" target="_blank" title="" >{{$tweet['time']}}</a> </em> </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget widget_media_gallery">
                        <h5>Instagram Feed</h5>
                        <div class="gallery galleryid-25 gallery-columns-4 gallery-size-thumbnail">
                            @foreach ($instagramArray as $instagram)
                            <dl class="gallery-item">
                                <dt class="gallery-icon {{isset($instagram['portrait']) && $instagram['portrait']?'portrait':'landscape'}}">
                                    <img width="150" height="150" data-opt-src="{{$instagram['srcLarge']}}" src="{{$instagram['srcSmall']}}" class="attachment-thumbnail size-thumbnail hoverZoomLink" alt="" data-opt-loaded="true" data-opt-lazy-loaded="true" data-opt-otimized-width="75" data-opt-optimized-height="75" />
                                    <noscript >
                                        <img width="150" height="150" src="{{$instagram['srcLarge']}}" class="attachment-thumbnail size-thumbnail" alt="" />
                                    </noscript>
                                </dt>
                            </dl>
                            @endforeach
                            <br style="clear: both" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="bottom-footer-content">
            <ul class="footer-menu float-left">
                <li><a href="{{ url('/') }}">Home</a> </li>
                <li><a href="{{ route('media') }}">@lang('buttons.media')</a> </li>
                <li><a href="{{ route('contact') }}">@lang('buttons.contact')</a> </li>
                <li><a href="{{ route('privacy_policy') }}">@lang('buttons.privacy_policy')</a> </li>
            </ul>
            <div class="copyright float-right"> VOST | Developed by <a href="{{config('social.websiteTeam')}}" target="_blank" rel="nofollow">VOST TEAM</a> </div>
        </div>
    </div>
</footer>
