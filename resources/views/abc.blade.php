@extends('components.layout')
@section('content')

    <section class="section anime-background">
        <div class="shapes-container">
            <div class="static-shape shape-main left"></div>
        </div>

        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-6">
                    <div class="card shadow bg-dark no-action mx-auto wallet">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <img src="{{asset('assets/frontends/default/img/avatar/1.jpg')}}"
                                 class="icon-md rounded-circle"
                                 alt="">
                            <span class="text-uppercase small bold">checkout</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </div>

                        <div class="card-body">
                            <div
                                class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                                data-sw-autoplay="2500" data-swiper-instance="[object Object]">
                                <div class="swiper-wrapper"
                                     style="transition-duration: 0ms; transform: translate3d(-298px, 0px, 0px);">
                                    <div
                                        class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-prev"
                                        data-swiper-slide-index="0" style="width: 298px;">
                                        <div class="card credit-card credit-card-st1">
                                            <div class="shapes-container">
                                                <div class="shape shape-1">
                                                    <div></div>
                                                </div>
                                                <div class="shape shape-2">
                                                    <div></div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col d-flex">
                                                        <div class="icon-md rounded-circle bg-danger op-7"></div>
                                                        <div class="icon-md rounded-circle bg-warning op-7"
                                                             style="transform: translateX(-50%)"></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="badge badge-success">Active</span>
                                                    </div>
                                                </div>
                                                <div class="my-4">
                                                    <div class="d-flex justify-content-around align-items-center">
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="text-dark bold">1234</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="small text-muted">Card holder</div>
                                                        <div class="text-dark semi-bold h6">John Doe</div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="small text-muted">Expires</div>
                                                        <div class="text-dark semi-bold h6">08/24</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="swiper-slide swiper-slide-active swiper-slide-duplicate-next swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="0" style="width: 298px;">
                                        <div class="card credit-card credit-card-st1">
                                            <div class="shapes-container">
                                                <div class="shape shape-1">
                                                    <div></div>
                                                </div>
                                                <div class="shape shape-2">
                                                    <div></div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col d-flex">
                                                        <div class="icon-md rounded-circle bg-danger op-7"></div>
                                                        <div class="icon-md rounded-circle bg-warning op-7"
                                                             style="transform: translateX(-50%)"></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="badge badge-success">Active</span>
                                                    </div>
                                                </div>
                                                <div class="my-4">
                                                    <div class="d-flex justify-content-around align-items-center">
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="text-dark bold">1234</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="small text-muted">Card holder</div>
                                                        <div class="text-dark semi-bold h6">John Doe</div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="small text-muted">Expires</div>
                                                        <div class="text-dark semi-bold h6">08/24</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-next"
                                        data-swiper-slide-index="0" style="width: 298px;">
                                        <div class="card credit-card credit-card-st1">
                                            <div class="shapes-container">
                                                <div class="shape shape-1">
                                                    <div></div>
                                                </div>
                                                <div class="shape shape-2">
                                                    <div></div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col d-flex">
                                                        <div class="icon-md rounded-circle bg-danger op-7"></div>
                                                        <div class="icon-md rounded-circle bg-warning op-7"
                                                             style="transform: translateX(-50%)"></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="badge badge-success">Active</span>
                                                    </div>
                                                </div>
                                                <div class="my-4">
                                                    <div class="d-flex justify-content-around align-items-center">
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="text-dark bold">1234</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="small text-muted">Card holder</div>
                                                        <div class="text-dark semi-bold h6">John Doe</div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="small text-muted">Expires</div>
                                                        <div class="text-dark semi-bold h6">08/24</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-details bg-contrast aos-init aos-animate" data-aos="fade-up">
                            <div class="card-body pb-0 d-flex align-items-center justify-content-between">
                                <h6 class="m-0 bold">Summary</h6>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></button>
                            </div>

                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">
                                                <p class="my-0 semi-bold font-sm">Bitcoin</p>
                                                <p class="my-0 small text-muted">Rise trade 3 hours duration</p>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">$535.45</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">
                                                <p class="my-0 semi-bold font-sm">Litecoin</p>
                                                <p class="my-0 small text-muted">Fall trade 1 hours duration</p>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">$183.95</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">
                                                <p class="my-0 semi-bold font-sm">Dogecoin</p>
                                                <p class="my-0 small text-muted">Rise trade 20 min duration</p>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">$5.99</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item px-0 pb-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">Total</div>
                                            <div class="text-end"><span class="bold">$725.39</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="/login" class="btn btn-primary btn-block btn-place-order">
                                Trade
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                        <h2 class="heading-line bold"><span class="light">In-app</span>
                            <br>Checkout</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, recusandae
                            tenetur!</p>
                    </div>

                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eligendi esse,
                        facilis fugit inventore iste itaque labore magni minima minus molestiae neque nesciunt nihil
                        nobis
                        nulla, quaerat quibusdam repellat sequi!</p>

                    <a href="/login" class="btn btn-rounded btn-outline-darker">Learn Moreb</a>
                </div>
            </div>
        </div>
    </section>
@endsection
