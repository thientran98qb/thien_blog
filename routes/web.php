<?php

use App\Http\Controllers\Clients\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function() {
    $post = new Post([
        'title' => 'some thing title',
        'status' => 'done'
    ]);
    dd($post['title'] = 'thientran');
    // return User::all();
});
class Model implements ArrayAccess {
    /** 
    * @var array
    */ 
    private $attributes;

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->attributes[$offset];
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
        
    }
    public function offsetExists(mixed $offset): bool
    {
        return true;
    }
    public function offsetUnset(mixed $offset): void
    {
        
    }
}
class Post extends Model{
    
}