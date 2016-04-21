<?php 
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use DB;
use App\Models\GeneralMessage;
use Illuminate\Html\FormFacade;
use Illuminate\Html\HtmlFacade;
use Illuminate\Support\Facades\Validator;

class GeneralMessageController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('adminauth');
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	
	public function edit($id, Request $request)
	{

		$data=array();
		$generalMessage = GeneralMessage::find($id);
		$data['generalMessage'] = $generalMessage;		
		
		if ($request->isMethod('post')) {
		
		$validator = Validator::make($request->all(), [
            'login' => 'required',
            'register' => 'required'
         
        ]);

        if ($validator->fails()) {
			return redirect('admin/generalMessage/edit/'.$id)
                        ->withErrors($validator)
                        ->withInput();
		}
		else{
			$generalMessage = new GeneralMessage;
			$generalMessage->login = $request->login;
			$generalMessage->register = $request->register;
			$update_arr = array(
			'login'=>$request->login,
			'register' => $request->register											
									);				
			GeneralMessage::where('id',$id)
			->update($update_arr);
			
			return redirect('admin/generalMessage/edit/'.$id);
		}
	}
		
		return view('admin/generalMessage/general_message_edit',$data);
	}
   

	
}