@foreach($news as $one)
<div class="post col-md-6 news-item">
    <div class="post-content-wrapper">
        <figure class="image-container">
            <a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}" class="hover-effect">
                <img src="{{ asset($one->image) }}" alt="" />
            </a>
        </figure>
        <div class="details">
            <h2 class="entry-title"><a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">{{ $one->{$slug->title} }}</a></h2>
            <div class="excerpt-container">
                <p> {{  $one->{$slug->content}  }}</p>
            </div>

        </div>
    </div>
</div>
@endforeach