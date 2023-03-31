<!DOCTYPE html>
<html lang="en">
<head>
@include('head')
</head>
<body class="animsition">
	
	@include('header')
 <!-- Product -->
 <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Album
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Tất cả album
                    </button>
                </div>
            </div>

            <div id="loadProduct">
            <div class="row isotope-grid" >
    @foreach($albums as $key => $album)
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-pic hov-img0">
                    <img src="{{ $album->thumb }}" alt="{{ $album->name }}">
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="/album/{{ $album->id }}-{{ Str::slug($album->name, '-') }}.html"
                           class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            {{ $album->name }}
                        </a>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


            </div>

            <div class="card-footer clearfix">
            {!! $albums->links() !!}
        </div>
            <!-- Load more -->
           
        </div>
    </section>


    @include('footer')
</body>
</html>