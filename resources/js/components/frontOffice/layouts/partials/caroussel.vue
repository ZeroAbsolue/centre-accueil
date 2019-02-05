<template>
    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

        <!--Slides-->
        <div class="carousel-inner view " role="listbox">
            <div class="carousel-item active ">
                <img class="d-block w-100" src="/img/decoration/deco.jpg" style="min-height: 400px" alt="First slide" width="" >
                <div class="mask flex-center waves-effect waves-light rgba-black-light">
                    <div class="container h-100 d-flex justify-content-center align-items-center">
                        <div class="row smooth-scroll">
                            <div class="col-md-12 text-center white-text ">
                                <div class="wow fadeInDown">
                                    <h1 class="white-text display-4 font-weight-bold">
                                        <em>Welcome to
                                            <strong>CAPB</strong>
                                        </em>
                                    </h1>

                                    <!--Rating-->
                                    <ul class="rating mt-3">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>

                                    <h4 class="text-uppercase white-text mb-5 mt-3 font-weight-bold spacing">La reussite de votre évenement est notre priorité</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="/img/decoration/deco1.jpg" style="min-height: 400px" alt="Second slide">
                <div class="mask flex-center waves-effect waves-light rgba-black-light">
                    <div class="container h-100 d-flex justify-content-center align-items-center">
                        <div class="row smooth-scroll">
                            <div class="col-md-12 text-center white-text ">
                                <div class="wow fadeInRightBig ">
                                    <h1 class="white-text display-4 font-weight-bold">
                                        <strong>CAPB</strong>
                                    </h1>

                                    <!--Rating-->
                                    <ul class="rating mt-3">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>

                                    <h4 class="text-uppercase white-text mb-5 mt-3 font-weight-bold spacing">Salle de fête ou de conférence à votre disposotion</h4>

                                </div>
                                <div class="wow bounceIn" data-wow-delay="0.99">
                                    <a href="#salles" class="btn btn-blue dark-grey-text font-weight-bold btn-rounded spacing " data-offset="100">
                                        <strong >reservation</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="/img/decoration/deco2.jpg" style="min-height: 400px" alt="Third slide">
                <div class="mask flex-center waves-effect waves-light rgba-black-light">
                    <div class="container h-100 d-flex justify-content-center align-items-center">
                        <div class="row smooth-scroll">
                            <div class="col-md-12 text-center white-text  ">
                                <div class="wow fadeInLeft" >
                                    <h1 class="white-text display-4 font-weight-bold ">
                                        <strong>CAPB</strong>
                                    </h1>

                                    <!--Rating-->
                                    <ul class="rating mt-3">
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>

                                    <h4 class="text-uppercase white-text mb-5 mt-3 font-weight-bold spacing">Chambre <strong>VIP</strong> à votre disposition</h4>

                                </div>
                                <div class="wow tada" data-wow-delay="0.99">
                                    <a href="#salles" class="btn btn-white dark-grey-text font-weight-bold btn-rounded spacing " data-offset="100">
                                        <strong >reservation</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100 img-fluid" src="/img/decoration/deco.jpg"></li>
            <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100 img-fluid" src="/img/decoration/deco1.jpg"></li>
            <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100 img-fluid" src="/img/decoration/deco2.jpg"></li>
        </ol>


    </div>
    <!--/.Carousel Wrapper-->
</template>

<script>
    export default {
        name: "caroussel"
    }
</script>

<style scoped>

</style>
