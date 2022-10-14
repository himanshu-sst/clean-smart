<?php 

namespace App\Http\Controllers; 

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use View,Session,DB,Auth,Validator,Response;

use App\Models\User; 


class ClientController extends Controller 
{ 
    public $modalClass;
    public $viewPath;

    public function __construct()
    {
        $this->modalClass   =   "client";
        $this->viewPath     =   "client";

        View::share('viewPath', $this->viewPath);
    }
    
    public function index(Request $request)
    { 
        //$this->authorize('show-store', User::class);

        /* $DB     =   User::query();

        $data   =   $request->all();
        if(!empty($data)){
            foreach($data as $field => $value){
                if($value != ""){
                    $DB->where($field,'like','%'.$value.'%');
                }
            }
        }

        $result = $DB->where('user_role',2)->paginate(15); */
        
        return view($this->viewPath.'.index');
    }

    public function show($id)
    { 
    	// $this->authorize('show-store', User::class);

    	$result = User::find($id);

    	if(!$result){
        	$this->flashMessage('warning', 'Store not found!', 'danger');            
            return redirect()->route('admin.store.index');
        }  

        return view($this->viewPath.'.show',compact('result'));
    }

    public function create()
    {
        // $this->authorize('create-user', User::class);

        return view($this->viewPath.'.create');
    }

    public function store(Request $request)
    {
        $data   =   $request->all();
        Validator::extend('mobile_valid', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^(\+61\d{0,9})|(\d{0,9})$/', $value); //regex:/^(\+61\d{0,9})|(\d{0,9})$/
        });
        $validator = Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => "required|mobile_valid|unique:users,mobile",
            'mobile_1' => "sometimes|mobile_valid",
            'email' => "required|string|email|max:255|unique:users,email",
            'industry_id' => 'required',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|same:password',
            'avtar' => 'sometimes|image|max:2048',
            'bio' => 'sometimes|max:500',
        ],[
            'mobile.mobile_valid' =>  'Enter a valid mobile number',
            'mobile_1.mobile_valid' =>  'Enter a valid alternate mobile number',
            'industry_id.required' =>  'Select a industry type',
            'avtar.max' =>  'Avtar can not be more then 2mb',
        ]);

        if ($validator->fails()) {
			return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));
            //return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
		} else {
            
            $request->merge(['password' => bcrypt($request->password)]);
            
            $data   =   $request->all();
            $data['user_role_id']   =   2;
            if(!isset($request->status)){
                $data['status']   =   0;
            }
            if($request->file('avtar')){
                $fileName = $request->file('avtar')->store(USER_IMAGE_ROOT_PATH);
                $data['avtar']   =   $fileName;
            }
            $data['full_name'] = $request->get('first_name')." ".$request->get('last_name');

            $user = User::create($data);
            
            $metaData['user_id']        =   $user->id;
            $metaData['industry_id']    =   $request->industry_id;
            $metaData['bio']            =   $request->bio;
            $user->meta()->create($metaData);

            Session::flash('success', 'Client added successfully.');

            return Response::json(array('success' => true, 'message'=>'Client added successfully.'));
        }
    }

    public function edit($id)
    { 
    	// $this->authorize('edit-user', User::class);

    	$result = User::find($id);

    	if(!$result){
        	$this->flashMessage('warning', 'Store not found!', 'danger');            
            return redirect()->route($this->viewPath.'.index');
        }  

        return view($this->viewPath.'.edit',compact('result'));
    }

    public function update(Request $request,$id)
    {
    	// $this->authorize('edit-user', User::class);

    	$result = User::find($id);

        if(!$user){
        	$this->flashMessage('warning', 'Store not found!', 'danger');            
            return redirect()->route($this->viewPath.'.index');
        }

        $result->update($request->all());

        $this->flashMessage('check', 'Store updated successfully!', 'success');

        return redirect()->route($this->viewPath.'.index');
    }

    public function updatePassword(Request $request,$id)
    {
    	// $this->authorize('edit-user', User::class);

    	$result = User::find($id);

        if(!$result){
        	$this->flashMessage('warning', 'Store not found!', 'danger');            
            return redirect()->route($this->viewPath.'.index');
        }

        $request->merge(['password' => bcrypt($request->get('password'))]);

        $store->update($request->all());

        $this->flashMessage('check', 'Store password updated successfully!', 'success');

        return redirect()->route($this->viewPath.'.index');
    }

    public function editPassword($id)
    { 
    	// $this->authorize('edit-user', User::class);

    	$result = User::find($id);

    	if(!$result){
        	$this->flashMessage('warning', 'Store not found!', 'danger');            
            return redirect()->route($this->viewPath.'.index');
        }              	               

        return view($this->viewPath.'.edit_password',compact('result'));
    }

    public function destroy($id)
    {
        // $this->authorize('destroy-user', User::class);

        $result = User::find($id);

        if(!$result){
            $this->flashMessage('warning', 'Store not found!', 'danger');            
            return redirect()->route($this->viewPath.'.index');
        }

        $result->delete();

        $this->flashMessage('check', 'Store successfully deleted!', 'success');

        return redirect()->route($this->viewPath.'.index');
    }
}