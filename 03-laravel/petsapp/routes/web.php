<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User as User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController; 
//use App\Http\Controllers\AdoptionController;


Route::get('/', function () {
    return view('welcome');
});

// List All Users (Factory Challenge)
Route::get('show/users', function () {
    $users = User::all();
    //dd($users->toArray());
    return view('users-factory')->with('users', $users);
});

Route::get('hello', function () {
    //echo "Hello from Laravel";
    return "<h1>Hello Laravel ❤️</h1>";
})->name('hello');

Route::get('show/pets', function () {
    $pets = App\Models\Pet::all();
    //var_dump($pets->toArray());
    dd($pets->toArray());
});

Route::get('/challenge/users', function () {
    $users = User::limit(20)->get();
    //dd($users->toArray());
    $code = "<table style='border-collapse: collapse; margin: 2rem auto; font-family: Arial'>
                <tr>
                    <th style='background: gray; color: white; padding: 0.4rem'>Id</th>
                    <th style='background: gray; color: white; padding: 0.4rem'>Fullname</th>
                    <th style='background: gray; color: white; padding: 0.4rem'>Age</th>
                    <th style='background: gray; color: white; padding: 0.4rem'>Created At</th>
                </tr>";
    foreach ($users as $user) {
        $code .= "<tr>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>" . $user->id . "</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>" . $user->fullname . "</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>" . Carbon\Carbon::parse($user->birthdate)->age . " years old</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>" . $user->created_at->diffForHumans() . "</td>";
        $code .= "</tr>";
    }
    return $code . "</table>";
});


Route::get('view/blade', function () {
    $title = "Examples Blade";
    $pets = App\Models\Pet::whereIn('kind', ['dog', 'cat'])->get();

    return view('example-view')
        ->with('title', $title)
        ->with('pets', $pets);
});


Route::get('show/pet/{id}', function () {
    $pet = App\Models\Pet::find(request()->id);
    //dd($pet->toArray());
    return view('show-pet')->with('pet', $pet);
});


Route::get('/dashboard', function (Request $request) {

    if (Auth::user()->role == 'Admin') {
        return view('dashboard-admin');
    } else if (Auth::user()->role == 'Customer') {
        return view('dashboard-customer');
    } else {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back()->with('error', 'Role no exist!');
    }

})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('pets', PetController::class); 
    Route::post('pets/search', [PetController::class, 'search']); 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('users/search', [UserController::class, 'search']);
});

require __DIR__ . '/auth.php';
