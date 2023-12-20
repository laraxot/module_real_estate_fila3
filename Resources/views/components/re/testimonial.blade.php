<div class="item">
    <div class="testimonial">
        <img
            {{-- src="{{ $testimonial->photo }}" --}}
            src="{{ $testimonial->medias->first()->getUrl() }}"
            alt="Image"
            class="img-fluid rounded-circle w-25 mb-4"
        />
        <div class="rate">
            @for ($i = 0; $i < $testimonial->rating; $i++)
                <span class="icon-star text-warning"></span>
            @endfor
        </div>
        <h3 class="h5 text-primary mb-4">{{ $testimonial->full_name }}</h3>
        <blockquote>
            <p>
                &ldquo;{{ $testimonial->testimonial }}&rdquo;
            </p>
        </blockquote>
        <p class="text-black-50">{{ $testimonial->company }}</p>
    </div>
</div>