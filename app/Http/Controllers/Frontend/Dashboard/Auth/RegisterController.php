<?php

namespace App\Http\Controllers\Frontend\Dashboard\Auth;

use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\Country;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
        /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect admins after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('dashboardguest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new admin instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Admin
     */
    protected function create(array $data)
    {
        $partner = [];
        $partner_country = [];
        for($i = 0; $i < $data['partners']; $i++){
           $partner["Partner".$i] = $data["Partner" .$i];
           $partner_country["Partner_country".$i] = $data["Partner_country" .$i];
        };
        $user = null;
        
        DB::transaction(function () use ($data, &$user, $partner, $partner_country) {
            $user = User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => Hash::make($data['password']),
          ]);
            // $country_id = Country::where('name', $data['country'])->firstorfail();
            // dd($country_id->id);
            $company = Company::create([
                'name' => $data['company'],
                'country_id' => $data['country'],
                'mobile' => $data['phone'],
                'user_id' => $user->id,
                'company_data' =>json_encode([
                    "partners" => $data['partners'],
                    "Patner_name" => $partner,
                    "Patner_country" => $partner_country,
                    "regesterd" => $data['regesterd'],
                    "capital" => $data['capital'],
                    "activity" => $data['activity'],
                    "note" => $data['note'],
                ])
                    
                ,
            ]);
            // json_encode($data)
});

      return $user;

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $countries = Country::orderBy('id')->get();
        $countries_names = [];

        foreach($countries as $country){
            $countries_names[] = ($country->name);
        };
        // dd($countries_names);
        return view('frontend.dashboard.user.auth.register', compact('countries', 'countries_names') );
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('web');
    }
}
