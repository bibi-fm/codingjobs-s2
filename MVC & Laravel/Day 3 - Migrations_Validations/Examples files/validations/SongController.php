<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    // Display all the Songs
    public function index()
    {
        $songs = DB::select('SELECT * FROM songs');
        // dd($songs);
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

        $result = DB::insert('INSERT INTO songs(title, release_date, poster, artist_id, categ_id) VALUES(?, ?, ?, 1, 1)', [$request->title, $request->release_date, $request->poster]);

        if ($result)
            return 'Inserted successfully';
        else
            return 'Problem inserting. Try again later.';
    }
}
