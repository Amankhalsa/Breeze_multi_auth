<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 
class SellerController extends Controller
{
//================ login page ==========================
    public function index(){

    	return view('backend.seller_login');
    }
//==================== dashboard  ==========================
    public function seller_dashboard(){

    	return view('backend.index');
    }
// ========================= seller login =======================
public function seller_login(Request $request){
	// dd($request->all());
        $check =$request->all();
        if(Auth::guard('seller')->attempt(['email'=> $check['email'], 'password'=>$check['password']])){
            return redirect()->route('seller.dashboard')->with('error', 'Seller Login successfully');
        }else{
            return back()->with('error', 'Invalid password');
        }

}

//====================== logout =======================
    public function seller_logout(){

            Auth::guard('seller')->logout();
            return redirect()->route('seller_login')->with('error', 'seller Logout successfully');
    }
    // ================== testing ====================
    public function testing(){
        return view('backend.index');
    }
    // =================== seller register =========================
    public function seller_register(){
        return view('backend.register');
    }
    // =================== create seller user ====================
    public function seller_user_create(Request $request){

        // dd($request->all());
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['created_at']=  Carbon::now();
        Seller::insert($data);

        return redirect()->route('seller_login')->with('error', 'Seller Created successfully');

    }
}
