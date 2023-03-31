<?php

namespace App\Http\Controllers;

use App\Http\Services\Album\AlbumService;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    protected $albumService;

    public function __construct(AlbumService $albumService)
    {
        $this->albumService = $albumService;
    }

    public function index($id = '', $slug = '')
    {
        $album = $this->albumService->show($id);
         $albummore = $this->albumService->more($id);
        $song =$this->albumService->baihatAlbum($id);
        return view('albums.content', [
            'title' => $album->name,
             'album' => $album,
             'songs' => $song,
             'albums' => $albummore
        ]);
    }
    public function show()
    {   
        $album = $this->albumService->getall();
        return view('albums.all',[
            'title' => 'Trang nghe nhạc uy tín hàng đầu Châu Á',
            'albums' => $album
        ]);
           
    }
}
