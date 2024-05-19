<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'job_listings';
    // protected $fillable = ['employer_id', 'title', 'salary'];
    // this is the oppisite of fillable , this will guard the thing you insert only
    protected $guarded = [];



    public function employer()
    {

        return $this->belongsTo(Employer::class);
    }
    public function tags()
    {

        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}







// public static function all(): array
// {
//     return [
//         ['id' => 1, 'title' => 'Director', 'salary' => '$10,000'],
//         ['id' => 2, 'title' => 'Programer', 'salary' => '$20,000'],
//         ['id' => 3, 'title' => 'Teacher', 'salary' => '$30,000']
//     ];
// }
// public static function find(int $id): array
// {
//     // $job = Arr::first($jobs, function ($job) use ($id) {
//     //     return $job['id'] == $id;
//     // });
//     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
//     if (!$job) {
//         return abort(404);
//     }
//     return $job;

//     // return static::all()->firstWhere('id', $id) ?? abort(404);
// }
