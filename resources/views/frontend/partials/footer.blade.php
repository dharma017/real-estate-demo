<footer class="page-footer indigo darken-2">
    <div class="container">
        <div class="row">
            <div class="col m4 s12">
                <h5 class="white-text uppercase">About Us</h5>
                @if(isset($footersettings[0]) && $footersettings[0]['aboutus'])
                    <p class="grey-text text-lighten-4">{{ $footersettings[0]['aboutus'] }}</p>
                @else
                    <p class="grey-text text-lighten-4">Real estate company description goes here.</p>
                @endif
            </div>
            <div class="col m6 s12">
                <h5 class="white-text uppercase">Recent Properties</h5>
                <ul class="collection border0">

                    @foreach($footerproperties as $property)
                    <li class="collection-item transparent clearfix p-0 border0">
                        <span class="card-image-bg m-r-10" style="background-image:url({{Storage::url('property/'.$property->image)}});width:60px;height:45px;float:left;"></span>
                        <div class="float-left">
                            <h5 class="font-18 m-b-0 m-t-5">
                                <a href="{{ route('property.show',$property->slug) }}" class="white-text">{{ str_limit($property->title,40) }}</a>
                            </h5>
                            <p class="m-t-0 m-b-5 grey-text text-lighten-1">Bedroom: {{ $property->bedroom }} Bathroom: {{ $property->bathroom }} </p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="col m2 s12">
                <h5 class="white-text uppercase">Menu</h5>
                <ul>
{{--                    <li class="uppercase {{ Request::is('pricing') ? 'underline' : '' }}">--}}
{{--                        <a href="{{ route('pricing') }}" class="grey-text text-lighten-3">Pricing</a>--}}
{{--                    </li>--}}

{{--                    <li class="uppercase {{ Request::is('service-request') ? 'underline' : '' }}">--}}
{{--                        <a href="{{ route('service-request') }}" class="grey-text text-lighten-3">Service Request</a>--}}
{{--                    </li>--}}

{{--                    <li class="uppercase {{ Request::is('about-us') ? 'underline' : '' }}">--}}
{{--                        <a href="{{ route('about-us') }}" class="grey-text text-lighten-3">About Us</a>--}}
{{--                    </li>--}}

                    <li class="uppercase {{ Request::is('privacy-policy') ? 'underline' : '' }}">
                        <a href="{{ route('pages.show', 'privacy-policy') }}" class="grey-text text-lighten-3">Privacy</a>
                    </li>

                    <li class="uppercase {{ Request::is('terms-and-conditions') ? 'underline' : '' }}">
                        <a href="{{ route('pages.show', 'terms-and-conditions') }}" class="grey-text text-lighten-3">Terms Of Use</a>
                    </li>

{{--                    <li class="uppercase {{ Request::is('contact') ? 'underline' : '' }}">--}}
{{--                        <a href="{{ route('contact') }}" class="grey-text text-lighten-3">Contact Us</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            @if(isset($footersettings[0]) && $footersettings[0]['footer'])
                {{ $footersettings[0]['footer'] }}
            @else
                © 2019 Developer Canvas Studio.
            @endif

            @if(isset($footersettings[0]) && $footersettings[0]['facebook'])
                <a class="grey-text text-lighten-4 right" href="{{ $footersettings[0]['facebook'] }}" target="_blank">FACEBOOK</a>
            @endif
            @if(isset($footersettings[0]) && $footersettings[0]['twitter'])
                <a class="grey-text text-lighten-4 right m-r-10" href="{{ $footersettings[0]['twitter'] }}" target="_blank">TWITTER</a>
            @endif
            @if(isset($footersettings[0]) && $footersettings[0]['instagram'])
                <a class="grey-text text-lighten-4 right m-r-10" href="{{ $footersettings[0]['instagram'] }}" target="_blank">INSTAGRAM</a>
            @endif

        </div>
    </div>
</footer>