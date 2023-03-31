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
                    Bài hát
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Tất cả bài hát
                    </button>
                </div>
            </div>

            <div id="loadProduct">
                @include('songs.allsong')
            </div>

            <div class="card-footer clearfix">
            {!! $songs->links() !!}
        </div>
            <!-- Load more -->
           
        </div>
    </section>


    @include('footer')
</body>
</html>