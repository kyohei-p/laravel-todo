<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

/* Todo一覧表示 */
Route::get('todos', [TodoController::class, 'index']);

/* Todo作成フォーム表示 */
Route::get('todos/create', [TodoController::class, 'create']);

/* Todo作成処理 */
Route::post('todos', [TodoController::class, 'store']);

/* Todo詳細表示 */
Route::get('todos/{id}', [TodoController::class, 'show']);

/* Todo編集フォーム表示 */
Route::get('todos/{id}/edit', [TodoController::class, 'edit']);

/* Todo更新処理 */
Route::put('todos/{id}', [TodoController::class, 'update']);

/* Todo削除処理 */
Route::delete('todos/{id}', [TodoController::class, 'destroy']);