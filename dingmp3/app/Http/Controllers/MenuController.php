<?php

namespace App\Http\Controllers;

use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function index($id = ''){
        $song = $this->menuService->show($id);
        $menumore = $this->menuService->more($id);
        return view('menus.detail', [
            'title' => 'Thể loại',
             'songs' => $song,
             'menus' => $menumore
        ]);
      
    }
    public function show()
    {   
        $menu = $this->menuService->getall();
        return view('menus.all',[
            'title' => 'Trang nghe nhạc uy tín hàng đầu Châu Á',
            'menus' => $menu
        ]);
           
    }
}
