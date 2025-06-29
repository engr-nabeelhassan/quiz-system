<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// ===== USER ROUTES =====
// Home page - shows all categories
Route::get('/',[UserController::class,'welcome']);

// Quiz list for specific category
Route::get('user-quiz-list/{id}/{category}',[UserController::class,'userQuizList']);

// Start quiz page - shows quiz info before starting
Route::get('user-start-quiz/{id}/{name}',[UserController::class,'startQuiz']);

// NEW: Take quiz route - actual quiz taking interface
Route::get('take-quiz/{id}/{name}',[UserController::class,'takeQuiz']);

// NEW: Submit quiz answers route
Route::post('submit-quiz',[UserController::class,'submitQuiz']);

// NEW: Show quiz results route
Route::get('quiz-results/{quiz_id}',[UserController::class,'showResults']);

// User signup page
Route::view('user-signup','user-signup');
Route::post('user-signup',[UserController::class,'userSignup']);

// NEW: User login page and functionality
Route::view('user-login','user-login');
Route::post('user-login',[UserController::class,'userLogin']);

// User logout
Route::get('user-logout',[UserController::class,'userLogout']);

// Redirect to signup when trying to take quiz without login
Route::get('user-signup-quiz',[UserController::class,'userSignupQuiz']);

// ===== ADMIN ROUTES =====
// Admin login
Route::view('admin-login','admin-login');
Route::post('admin-login',[AdminController::class,'login']);

// Admin dashboard
Route::get('dashboard',[AdminController::class,'dashboard']);

// Category management
Route::get('admin-categories',[AdminController::class,'categories']);
Route::post('add-category',[AdminController::class,'addCategory']);
Route::get('category/delete/{id}',[AdminController::class,'deleteCategory']);

// Quiz management
Route::get('add-quiz',[AdminController::class,'addQuiz']);
Route::post('add-mcq',[AdminController::class,'addMCQ']);
Route::get('end-quiz',[AdminController::class,'endQuiz']);

// View quizzes and MCQs
Route::get('show-quiz/{id}/{quizName}',[AdminController::class,'showQuiz']);
Route::get('quiz-list/{id}/{category}',[AdminController::class,'quizList']);

// Admin logout
Route::get('admin-logout',[AdminController::class,'logout']);

