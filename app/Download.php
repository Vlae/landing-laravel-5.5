<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Download extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'download_date'
    ];


    public function selectDownloadEmails($from_date, $end_date) {
        $download = new Download();
        $result = $download->select()
            ->where('date', '>', $from_date)
            ->where('date', '<', $end_date)
            ->get();

        return $result;
    }


}
