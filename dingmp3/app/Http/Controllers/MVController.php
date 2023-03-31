<?php

namespace App\Http\Controllers;

use App\Http\Services\MV\MVService;
use Illuminate\Http\Request;

class MVController extends Controller
{
    protected $mvService;

    public function __construct(MVService $mvService)
    {
        $this->mvService = $mvService;
    }

    public function index($id = '', $slug = '')
    {
        $mv = $this->mvService->show($id);
         $mvmore = $this->mvService->more($id);

        return view('mvs.content', [
            'title' => $mv->name,
             'mv' => $mv,
             'mvs' => $mvmore
        ]);
    }
    public function show()
    {   
        $mv = $this->mvService->getall();
        return view('mvs.all',[
            'title' => 'Trang nghe nhạc uy tín hàng đầu Châu Á',
            'mvs' => $mv
        ]);
           
    }
}
