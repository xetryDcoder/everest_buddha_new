<!DOCTYPE html>
<html lang="en">

@include('components.head')


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper home_one">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="v" class="letters-loading">
                                v
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="B" class="letters-loading">
                                B
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        @include('components.nav')


        @yield('content')

        @include('components.footer')
        @include('components.script')

</body><!-- End of .page_wrapper -->

</html>
