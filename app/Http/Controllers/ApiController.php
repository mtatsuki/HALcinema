<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;

class ApiController extends Controller
{
    public function getNewsByDate($date)
    {
        return News::where("release_date", $date)->get();
    }

    public function getScheduleByDate($date)
    {
        return
            DB::select(
                "SELECT dates.id, details.id as details_id, movies.id as movie_id,
                dates.release_date, details.screening_time,
                details.screen_type, movies.title,
                movies.synopsis, movies.director, 
                movies.star, movies.running_total_time, 
                movies.official_url, movies.image_url 
                FROM (release_dates as dates 
                INNER JOIN release_details as details 
                ON dates.detail_id = details.id)
                INNER JOIN movies ON details.movie_id = movies.id 
                WHERE dates.release_date = '". $date ."'
                GROUP BY dates.id"
            );
    }
}
