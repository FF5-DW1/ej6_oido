<?php
    namespace App\Http\Controllers\Auth;
    
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class LoginController extends Controller
    {
        
        public function login(Request $request)
        {   dd($request);
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                // Autenticación exitosa, redirigir al feed
                return redirect()->intended('feed');
            } else {
                // Autenticación fallida, redirigir al formulario de inicio de sesión con un mensaje de error
                return redirect()->route('login')->with('error', 'Credenciales inválidas');
            }
        }

        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }

    }
    

