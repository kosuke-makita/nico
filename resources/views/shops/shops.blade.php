@if ($shops)
    <div class="row">
        @foreach ($shops as $shop)
            <div class="shop">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div id=images class="panel-heading text-center">
                            <img src="{{asset('item/'.$shop->path)}}">
                        </div>
                        <div class="panel-body">
                            <h3 id="name1" class="shop-title">{!! link_to_route('shops.show', $shop->name, ['name' => $shop->id]) !!}</h3>
                            <div id="botton" class="buttons text-center ">
                                @if (Auth::check())
                                    @include('shops.favorite_button', ['shop' => $shop])
                                @endif
                            </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
