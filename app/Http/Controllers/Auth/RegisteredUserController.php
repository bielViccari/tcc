<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Models\Postagem;
use App\Http\Requests\StoreUpdatePostagens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function edit()
    {
        $user=Auth::user();
        $postagens = Postagem::where('user_id', Auth::user()->id)->get();
        return view('admin.perfil',compact('user','postagens'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect()
        ->route('admin.home')
        ->with('messagem','informações editada com sucesso !');
    } 

    public function update(Request $request, $id)
    {
        $user= User::findOrFail($id);
        $user->update($request->all());

       return redirect()
       ->route('perfil.edit')
       ->with('mensagem',"Usuario editado com sucesso !");   

    }
}
