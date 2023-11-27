<!--
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use PDF;


class UserController extends Controller {

    public function list() {
        $users=User::get();
        return view('users', ['users=>$users']);
    }

    public function import_user(Request $request) {
       
    }

    public function export_user() {
        
    }

    public function export_user_pdf() {
        $users=User::get();
        $pdf=PDF::loadView('pdf.users', [
            'users'=>$users
            ]);
        return $pdf->download('users.pdf')
    }


}

-->