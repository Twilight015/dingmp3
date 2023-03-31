<section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Thể loại
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Tất cả thể loại 
                    </button>
                </div>
            </div>

            <div id="loadProduct">
            <div class="row isotope-grid" >
            <ul>
                @foreach($menus as $key => $menu)
                
                        <a href="/the-loai/{{ $menu->id }}.html" ><li>{{ $menu->name }}</li></a>
                    
                @endforeach
            </ul>
        </div>


            </div>

            
            <!-- Load more -->
           
        </div>
    </section>