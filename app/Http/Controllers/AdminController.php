<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;
use App\Mail\Spam;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function index() {
        $quantity = Download::count();

        return view('admin/index', ['downloadsQnt' => $quantity]);

    }

    public function sendEmail(Request $request, Download $download) {
        $from_date = strtotime($request->input('from_date'));
        $end_date = strtotime($request->input('end_date'));

        $items = $download->selectDownloadEmails($from_date, $end_date);
        foreach ($items as $obj) {
            $obj->subject = $request->input('subject');;
            $text = str_replace('{name}', $obj->name, $request->input('text'));

            Mail::send(['html' => 'mails.spam'],['text' => $text], function ($message) use($obj) {
                $message->to($obj->email, $obj->name)->subject($obj->subject);
            });
        }

        return view('admin.sendEMail', ['sent' => true]);
    }

    public function getDownloads(Download $download){
        $list = $download->select()
            ->from('downloads')
            ->orderBy('id','desc')
            ->get();

        return view('admin/downloads', ['downloads' => $list]);
    }

}
