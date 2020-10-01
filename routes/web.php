        <?php
     use App\Http\Controllers\UserController;
     use App\Http\Controllers\PageController;
        use Illuminate\Support\Facades\Route;


        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register web routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | contains the "web" middleware group. Now create something great!
        |
        */

        Route::get('/', function () {
     return view('welcome');
    /*
          try {
    DB::connection()->getPdo();
    echo 'Yey, it worked';
    } catch (\Exception $e) {
    die("Could not connect to the database. Please check your configuration. error:" . $e );
    }
    */
        });

      //  Route::get('test1','test1@test1');

      //  Route::get('/test1', [test1::class, 'test1']);

      //  Route::get('test1', 'app\Http\Controllers\test1@test1');

  // Route::get('/register',[akashController::class,  'test']);
  Route::get('/user', [UserController::class, 'index']);
    Route::get('/page', [PageController::class, 'index']);
