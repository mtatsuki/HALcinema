<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReleaseDate;
use App\ReleaseDetail;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view("admin.movies.add");
    }

    public function store(Request $request)
    {
        $movies = new Movie();
        $movies->title = $request->title;
        $movies->running_total_time = $request->running_total_time;
        $movies->save();

        $releaseDetail = new ReleaseDetail();
        $releaseDetail->movie_id = $movies->id;
        $releaseDetail->screening_time = $request->screening_time;
        $releaseDetail->screen_type = $request->screen_type;
        $releaseDetail->save();

        $releaseDate = new ReleaseDate();
        $releaseDate->detail_id = $releaseDetail->id;
        $releaseDate->release_date = $request->release_date;
        $releaseDate->save();

        return redirect('/admin');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
