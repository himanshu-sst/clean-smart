<?php 

namespace App\Http\Controllers; 

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;  
use View;

use App\Models\User; 


class ScopeController extends Controller 
{ 
    public $modalClass;
    public $viewPath;

    public function __construct()
    {
        $this->modalClass   =   "scope";
        $this->viewPath     =   "scope";

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
        // $this->authorize('create-user', User::class);

        $request->merge(['password' => bcrypt($request->get('password'))]);

        $result = User::create($request->all());

        $this->flashMessage('check', 'Store successfully added!', 'success');

        return redirect()->route($this->viewPath.'.create');
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