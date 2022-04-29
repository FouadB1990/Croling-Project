<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required'],
            'place_of_birth' => ['required', 'string', 'max:255'],
            'passport_number' => ['required'],
            'date_of_passpot_end' => ['required'],
            'naval_passport_number' => ['required'],
            'date_of_passport_naval_end' => ['required'],
            'nearest_airport' => ['required', 'string', 'max:255'],
            'bank_name' => ['required', 'string', 'max:255'],
            'bank_branch' => ['required', 'string', 'max:255'],
            'bank_address' => ['required', 'string', 'max:255'],
            'account_number' => ['required', 'string', 'max:255'],
            'ibn_number' => ['required'],
            'swift_code' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'name_ar' => $data['name_ar'],
            'nationality' => $data['nationality'],
            'date_of_birth' => $data['date_of_birth'],
            'place_of_birth' => $data['place_of_birth'],
            'passport_number' => $data['passport_number'],
            'date_of_passpot_end' => $data['date_of_passpot_end'],
            'naval_passport_number' => $data['naval_passport_number'],
            'date_of_passport_naval_end' => $data['date_of_passport_naval_end'],
            'nearest_airport' => $data['nearest_airport'],
            'bank_name' => $data['bank_name'],
            'bank_branch' => $data['bank_branch'],
            'bank_address' => $data['bank_address'],
            'account_number' => $data['account_number'],
            'ibn_number' => $data['ibn_number'],
            'swift_code' => $data['swift_code'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

            if (request()->hasFile('image')) {

                request()->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);

                // Save the file locally in the storage/public/ folder under a new folder named /image
                // $request->file->store('image','public');
                $image = request()->file('image');
                $file = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath,$file);
                
                $user->update(['image'=>$file]);

         
    
        return $user;
    }
    }
}
