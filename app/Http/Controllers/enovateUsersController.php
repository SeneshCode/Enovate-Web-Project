<?php

namespace App\Http\Controllers;

use App\Models\enovateUsers;
use Illuminate\Http\Request;

class enovateUsersController extends Controller
{
    public function store(Request $request)
    {
        $fileName = "storage/images/photojpg.jpg";

        $enoData = [
            'user_name' => $request->user_name,
            'email' => $request->email,
            'avatar' => $fileName,
            'msg' => $request->msg
        ];

        enovateUsers::create($enoData);

        return response()->json([
            'status' => 200,
        ]);
    }

    public function fetchAll()
    {
        $enovateUsers = enovateUsers::all();
        $enovateUsersCount = $enovateUsers->count();
        $response = '';

        if ($enovateUsersCount > 0) {
            $response .= '<h4 class="comments-count mb-4 mt-2">'.$enovateUsersCount.' Comments</h4>';

            foreach ($enovateUsers as $user ){
                $response .= '<div class="d-flex">
                <div class=" " ><img  class="comment-img rounded-circle d-flex justify-content-center items-center photo-set" src="'.$user->avatar.'" alt="">
                </div>
                <div>
                    <h5 class="d-flex"><a href="">'.$user->user_name.'</a>

                    </h5>
                    <time datetime="2020-01-01">'.$user->created_at.'</time>
                    <p>
                    '.$user->msg.'
                    </p>
                </div>
            </div>';
            }

            echo $response;
        } else {
            echo "<h3 align='center'>No Post Comment here.</h3>";
        }
    }
}


 // {{-- <div class="reply" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#replymodeltarget"><i class="bi bi-reply-fill"></i>
                    //     Reply</div> --}}
