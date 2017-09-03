<?php

namespace App\Http\Controllers;

use App\Download;

use Illuminate\Support\Facades\Validator as Validator;
use Illuminate\Http\Request as Request;

class DownloadController extends Controller
{

    /**
     * Creates row in DB when document downloaded
     *
     * @return bool @true if download successful, bool @false otherwise
     */
    public function saveDownloadData(Request $request) {
        $data = $request->all();

        if ( $request->isMethod('post') ) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required'
            ]);

            if ($validator->fails() || filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false) {
                return response()->json(['response' => 'Error. Data in fields incorrect']);
            }

            $download = new Download();
            $download->name = $data['name'];
            $download->email = $data['email'];
            $download->date = time();
            $download->save();

            return response()->json(['response' => 'success']);
        }
    }
}
