<?

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
user Illuminate\Foundation\Auth\AuthenticateUsers;
use Illuminate\Database\Eloquent\Model;

Class LoginController extends Controller
{
    $users = User::table('users')->select('user_id')->get();
}