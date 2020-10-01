<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
  public function index(){
    // echo 'hello';

    //all data from table

  /*  $users = user::all();
    foreach($users as $user)  {
      echo "Name: $user->name <br> Email: $user->email";
      echo"<br><br>";
    }*/

    //particular data from table

$users=user::where('id',1)
  ->get();
    foreach($users as $user)  {
    echo "Name: $user->name <br> Email: $user->email";
    echo"<br><br>";
  }

}
}
