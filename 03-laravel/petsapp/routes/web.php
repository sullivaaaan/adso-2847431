<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\User as User;
use App\Models\Pet as Pet;
use illuminate\Support\Carbon;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//list all users (Factory challenge
Route::get('show/users', function () {
    $users = User::all();
   //d($users->toArray());
    return view('users-factory')->with('users', $users);
});

Route::get('hello', function(){
    return "<h1>Hello Laravel</h1>";
})->name('hello');

Route::get('show/pets', function(){
    $pets = Pet::all();
    //var_dump($pets->toArray());
    dd($pets->toArray());
});
Route::get('pets/{id}', function($id) {
    $pet = Pet::findOrFail($id);
    return view('pet-details')->with('pet', $pet);
})->name('pets.show');

Route::get('user/list', function(){
    $users = User::take(20)->get();
    
    $code = "<table style='border-collapse: collapse; margin: 2rem auto; font-family: Arial'>
    <tr>
        <th style='background: gray; color: white; padding: 0.4rem'>Id</th>
        <th style='background: gray; color: white; padding: 0.4rem'>Fullname</th>
        <th style='background: gray; color: white; padding: 0.4rem'>Age</th>
        <th style='background: gray; color: white; padding: 0.4rem'>Created At</th>
    </tr>";

    foreach($users as $user){
        $code .= ($user->id%2 == 0) ? "<tr style='background: #ccc'>":"<tr>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->id."</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->fullname."</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".Carbon::parse($user->birthdate)->age." years old</td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->created_at->diffForHumans()."</td>";
        $code .= "</tr>";
    }
    return $code .= "</table>";
});

route::get('view/blade', function(){
    $title = "examples blade";
    $pets = Pet::whereIn('kind', ['dog', 'cat'])->get();


    return view('example-view')
        ->with('title', $title)
        ->with('pets', $pets);

});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
