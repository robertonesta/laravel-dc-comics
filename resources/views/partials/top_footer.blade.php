<div class="top_footer py-3">
    <div class="container position-relative">
        <div class="ft_links d-flex gap-3">
            <div>
                <h6 class="text-uppercase text-white my-3">dc comics</h6>
                <ul class="list-unstyled">
                    @foreach($db['ft_links']['dc comics'] as $ft_link)
                    <li class="">
                        <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                    </li>
                    @endforeach
                </ul>
                <h6 class="text-uppercase text-white my-3">shop</h6>
                <ul class="list-unstyled">
                    @foreach($db['ft_links']['shop'] as $ft_link)
                    <li class="list-unstyled">
                        <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h6 class="text-uppercase text-white my-3">dc</h6>
                <ul class="list-unstyled">
                    @foreach($db['ft_links']['dc'] as $ft_link)
                    <li>
                        <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h6 class="text-uppercase text-white my-3">sites</h6>
                <ul class="list-unstyled">
                    @foreach($db['ft_links']['sites'] as $ft_link)
                    <li>
                        <a class="text-secondary text-decoration-none" href="#"> {{$ft_link }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer_logo">
                <img src=" {{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc_logo" width="550">
            </div>
        </div>
    </div>
    <div class="container">
    <p class="text-secondary">All Site Content TM and <i class="fa-regular fa-copyright"></i> 2023 DC Entertainment unless otherwise <span class="text-primary">noted here</span>. All rights reserved. <br> <span class="text-primary">Cookies Settings</span></p>
    </div>
</div>