@foreach($destinations as $one)
<div class="col-sms-6 col-sm-4 col-md-3 col-xs-12 pull-left destination-item">
    <article class="box animated" data-animation-type="fadeInDown" style="animation-duration: 1s; visibility: visible;">
        <figure>
            <a href="{{ url('/'.$lang.'/destinations/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                <img style="width: 270px;height: 161px;" src="{{ asset($one->image) }}" alt="{{ $one->{$slug->title} }}">
            </a>
            <figcaption>
                <h2 class="caption-title">
                    <a href="{{ url('/'.$lang.'/destinations/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                        {{ $one->{$slug->title} }}
                    </a>
                </h2>
            </figcaption>
        </figure>
    </article>
</div>
@endforeach
