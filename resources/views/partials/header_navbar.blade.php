<div class="header_navbar py-3">
    <div class="container d-flex justify-content-end align-items-center">
        <div class="logo">
            <img src= "{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <ul class="navbar_links d-flex justify-content-center align-items-center gap-3">

            @foreach($db['links'] as $link)
            <li class="text-uppercase text-decoration-none list-unstyled">
                <strong> {{ $link }} </strong>
            </li>
            @endforeach
        </ul>
        <input type="search" id="search" class="border-0 border-bottom border-primary" placeholder="search">
    </div>
</div>