<template>
    <!--Section: Attractions-->
    <section class="mb-5 pt-3 pb-3 wow fadeIn container" data-wow-delay="0.2s">
        <div class="divider-new">
        <h5 class="text-center text-uppercase font-weight-bold spacing my-5 py-4 wow fadeIn" data-wow-delay="0.2s">
            <strong>Images</strong>
        </h5>
        </div>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 d-flex justify-content-center mb-5">

                <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
                <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Salle</button>
                <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Chambre</button>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="gallery" id="gallery">

            <!-- Grid column -->
            <div class="mb-3 pics animation all 2">
                <img class="img-fluid" src="img/Chambre/IMG_0667.jpg" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <img class="img-fluid" src="img/Salle/fete.jpg" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <img class="img-fluid" src="img/Salle/IMG_0543.jpg" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 2">
                <img class="img-fluid" src="img/Chambre/IMG_0690.jpg" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 2">
                <img class="img-fluid" src="img/Chambre/IMG_0622.jpg" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <img class="img-fluid" src="img/Salle/dc0c2008801ec5964032fda9a33dd1e7.jpg" alt="Card image cap">
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <div class="divider-new">
            <h5 class="text-center text-uppercase font-weight-bold spacing my-5 py-4 mt-2 wow fadeIn" data-wow-delay="0.2s">
                <strong>Videos</strong>
            </h5>
        </div>

        <!--Carousel Wrapper-->
        <div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#video-carousel-example" data-slide-to="1"></li>
                <li data-target="#video-carousel-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <video class="video-fluid" autoplay loop controls muted>
                        <source src="video/IMG_0682.MOV" type="video/mp4" />
                    </video>
                </div>
                <div class="carousel-item">
                    <video class="video-fluid" autoplay loop controls muted>
                        <source src="video/IMG_0688.MOV" type="video/mp4" />
                    </video>
                </div>
                <div class="carousel-item">
                    <video class="video-fluid" autoplay loop controls muted>
                        <source src="video/IMG_0677.MOV" type="video/mp4" />
                    </video>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--Carousel Wrapper-->
        <!--&lt;!&ndash;Grid row&ndash;&gt;-->
        <!--<div class="row">-->

            <!--&lt;!&ndash;Carousel Wrapper&ndash;&gt;-->
            <!--<div id="carousel-with-lb2" class="carousel slide carousel-multi-item" data-ride="carousel">-->

                <!--&lt;!&ndash;Controls&ndash;&gt;-->
                <!--<div class="controls-top">-->
                    <!--<a class="btn-floating btn-secondary" href="#carousel-with-lb2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>-->
                    <!--<a class="btn-floating btn-secondary" href="#carousel-with-lb2" data-slide="next"><i class="fa fa-chevron-right"></i></a>-->
                <!--</div>-->
                <!--&lt;!&ndash;/.Controls&ndash;&gt;-->

                <!--&lt;!&ndash;Indicators&ndash;&gt;-->
                <!--<ol class="carousel-indicators">-->
                    <!--<li data-target="#carousel-with-lb2" data-slide-to="0" class="active secondary-color"></li>-->
                    <!--<li data-target="#carousel-with-lb2" data-slide-to="1" class="secondary-color"></li>-->
                    <!--<li data-target="#carousel-with-lb2" data-slide-to="2" class="secondary-color"></li>-->
                <!--</ol>-->
                <!--&lt;!&ndash;/.Indicators&ndash;&gt;-->

                <!--&lt;!&ndash;Slides and lightbox&ndash;&gt;-->

                <!--<div class="carousel-inner mdb-lightbox" role="listbox">-->
                    <!--<div id="mdb-lightbox-ui"></div>-->
                    <!--&lt;!&ndash;First slide&ndash;&gt;-->
                    <!--<div class=" carousel-item active text-center">-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181011-WA0000.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181011-WA0000.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0002.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/Autre/IMG_0545.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0003.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0003.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0004.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0004.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->
                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0005.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0005.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->
                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0006.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0006.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                    <!--</div>-->
                    <!--&lt;!&ndash;/.First slide&ndash;&gt;-->

                    <!--&lt;!&ndash;Second slide&ndash;&gt;-->
                    <!--<div class="carousel-item text-center">-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0007.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0007.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0008.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0008.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0009.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0009.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0010.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0010.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->
                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0011.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0011.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->
                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0012.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0012.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                    <!--</div>-->
                    <!--&lt;!&ndash;/.Second slide&ndash;&gt;-->

                    <!--&lt;!&ndash;Third slide&ndash;&gt;-->
                    <!--<div class="carousel-item text-center">-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0013.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0013.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0014.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0014.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0015.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0015.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0016.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0016.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->
                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0017.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/IMG-20181012-WA0017.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->
                        <!--<figure class="col-md-4 d-md-inline-block">-->
                            <!--<a href="/img/IMG-20181012-WA0018.jpg" data-size="1600x1067">-->
                                <!--<img src="/img/Home/IMG_0528.jpg" class="img-fluid">-->
                            <!--</a>-->
                        <!--</figure>-->

                    <!--</div>-->
                    <!--&lt;!&ndash;/.Third slide&ndash;&gt;-->

                <!--</div>-->
                <!--&lt;!&ndash;/.Slides&ndash;&gt;-->

            <!--</div>-->
            <!--&lt;!&ndash;/.Carousel Wrapper&ndash;&gt;-->

        <!--</div>-->
        <!--&lt;!&ndash;Grid row&ndash;&gt;-->
    </section>
    <!--/Section: Attractions-->
</template>

<script>
    export default {
        name: "Attraction",
        created(){
            $(function() {
                var selectedClass = "";
                $(".filter").click(function(){
                    selectedClass = $(this).attr("data-rel");
                    $("#gallery").fadeTo(100, 0.1);
                    $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
                    setTimeout(function() {
                        $("."+selectedClass).fadeIn().addClass('animation');
                        $("#gallery").fadeTo(300, 1);
                    }, 300);
                });
            });
        }
    }
</script>

<style scoped>
    .gallery {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-width: 33%;
        -moz-column-width: 33%;
        column-width: 33%; }
    .gallery .pics {
        -webkit-transition: all 350ms ease;
        transition: all 350ms ease; }
    .gallery .animation {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1); }

    @media (max-width: 450px) {
        .gallery {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
            -webkit-column-width: 100%;
            -moz-column-width: 100%;
            column-width: 100%;
        }
    }

    @media (max-width: 400px) {
        .btn.filter {
            padding-left: 1.1rem;
            padding-right: 1.1rem;
        }
    }
</style>
