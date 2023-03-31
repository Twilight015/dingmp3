<?php

namespace App\Http\Controllers;

use App\Http\Services\Song\SongService;
use App\Models\songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    protected $songService;

    public function __construct(SongService $songService)
    {
        $this->songService = $songService;
    }

    public function index($id = '', $slug = '')
    {
        $song = $this->songService->show($id);
         $songsMore = $this->songService->more($id);

        return view('songs.content', [
            'title' => $song->name,
             'song' => $song,
             'songs' => $songsMore
        ]);
    }
    public function show()
    {   
        $songs = $this->songService->getall();
        return view('songs.all',[
            'title' => 'Trang nghe nhạc uy tín hàng đầu Châu Á',
            'songs' => $songs
        ]);
           
    }
    public function search()
    {
        return view('songs.search',[
            'title' =>'Tìm kiếm'
        ]);
    }
}
