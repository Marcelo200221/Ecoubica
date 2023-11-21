<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\User;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller{
        public function register(Request $request){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->rut = $request->rut;
            $user->password = Hash::make($request->password);
            $user->role = 'user';
            $user->save();

            Auth::login($user);

            return redirect(route('welcome'));
        }

        public function login(Request $request){

            $credentials = [
                "email" => $request->email,
                "password" => $request->password,
            ];

            $remember = ($request->has('remember') ? true : false);

            if(Auth::attempt($credentials, $remember)){
                $request->session()->regenerate();

                return redirect(route('welcome'));
            }else{
                return redirect('login');
            }
        }

        public function logout(Request $request){

            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect(route('welcome'));
        }

        
    }



?>