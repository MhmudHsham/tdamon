@foreach($programs as $one)
<div class="col-sm-6 col-md-4 pull-left program-item" >
    <article class="box">
        <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0" style="animation-duration: 1s; visibility: visible;">
            <a class="hover-effect" href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}" title="{{ $one->{$slug->title} }}">
                <img style="width:270px;height:161px;" src="{{ asset($one->image) }}" alt="{{ $one->{$slug->title} }}">
            </a>
        </figure>
        <div class="details">
            <h4 class="box-title">{{ $one->{$slug->title} }}</h4>
            <div class="feedback">
                <span class="price">
                    @php($money = $one->dates[0]->price)
                    @php($currency_price = $one->dates[0]->currency->price)
                    {{ view("front.currency.convert", compact('money', 'currency_price')) }}
                </span>
                <div title="{{ $one->stars }} {{ trans("lang.stars") }}" class="five-stars-container" data-toggle="tooltip" data-placement="bottom">
                    @for($i = 0; $i < $one->stars; $i++)
                    <span class="five-stars" style=""></span>
                    @endfor

                </div>
            </div>
            <p class="description">{{ mb_substr($one->{$slug->content}, 0, 100) }} <a href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}">[ ... ]</a></p>
            <div class="action">
                <a href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}" class="button btn-small">{{ trans("lang.more") }}</a>
                <a href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}" class="button btn-small yellow">{{ trans("lang.book") }}</a>
            </div>
        </div>
    </article>
</div>
@endforeach