<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
 
     Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'company' => $request->company,
        'message' => $request->message
     ]);
     return redirect()->back();
})->name('store.contact');
