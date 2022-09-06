<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Song;

class SongController extends Controller
{
    // Display all the Songs
    public function index()
    {
        $songs = Song::all();
        return view('all-songs', ['mysongs' => $songs]);
    }

    public function show($id)
    {
        // $song = DB::select('SELECT * FROM songs WHERE id = ?', [$id]);

        $song = DB::table('songs')->where('id', $id)->first();

        // dd($song);
        return view('song-details', ['s' => $song]);
    }

    // Display the form
    public function create()
    {
        return view('new-song');
    }

    // Insert song into the DB
    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'release_date' => 'required'
        ]);

        $song = Song::create([
            'title' => $request->title,
            'release_date' => $request->release_date,
            'poster' => $request->poster,
            'artist_id' => 1,
            'categ_id' => 1,
        ]);

        if ($song)
            return 'Inserted successfully';
        else
            return 'Problem inserting. Try again later.';
    }
}
