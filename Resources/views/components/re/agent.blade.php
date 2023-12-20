<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
    <div class="h-100 person">
        <img
            {{-- src="{{ asset($agent->photo) }}" --}}
            src="{{-- $agent->medias->first()->getUrl() --}}"
            alt="Image"
            class="img-fluid"
        />

        <div class="person-contents">
            <h2 class="mb-0"><a href="#">{{ $agent->full_name }}</a></h2>
            <span class="meta d-block mb-3">{{ $agent->title }}</span>
            <p>
                {{ $agent->description }}
            </p>

            <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                    <a href="{{ $agent->twitter }}"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ $agent->facebook }}"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ $agent->linkedin }}"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ $agent->instagram }}"><span class="icon-instagram"></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
