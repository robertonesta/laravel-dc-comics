<div class="bottom_footer bg-dark py-3">
    <div class="container d-flex align-items-center justify-content-between">
        <div>
            <button class="border-primary bg-dark py-2 px-3">
                <a href="#" class="text-uppercase text-light text-decoration-none"><strong>sign-up now!</strong></a>
            </button>
        </div>
        <div class="socials d-flex align-items-center gap-3">
            <h4 class="text-primary text-uppercase mb-0"> <strong>follow us</strong></h4>
            <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 gap-3">
                @foreach ($socials as $social)
                <li>
                    <a href="#"><img width="25" src="{{Vite::asset('resources/img/footer-'.$social) }}" alt="{{$social}} Logo"></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>