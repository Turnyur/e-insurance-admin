<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Utils\GenericUtils;
class AdminController extends Controller
{
   public function account(){
    $authenticatedAdmin = auth()->user();
    $pageTitle = "Account | Dashboard | ". env('APP_NAME');
       return view('dashboard.account', compact('pageTitle', 'authenticatedAdmin'));
   }

   public function createUser(){
    $authenticatedAdmin = auth()->user();
    $pageTitle = "Create User | Dashboard | ". env('APP_NAME');
       return view('dashboard.user.create', compact('pageTitle', 'authenticatedAdmin'));
   }

   public function updatedAccount(Request $request){
       $adminId = $request->id;
       $validatedData = $request->validate([
           'username'=> 'required',
           'email'=> ['required', 'email'],
           'firstname'=> 'required',
           'lastname'=> 'required',
           'image'=> '',

       ]);

       $adminAccountToUpdate = User::find($adminId);

       $imagePath = $this->uploadUserImage($request, 'storage', $adminAccountToUpdate->image, ['width'=>90, 'height'=>90]);



      $result =  $adminAccountToUpdate->update([
        'username'=> $validatedData['username'],
           'email'=> $validatedData['email'],
           'firstname'=> $validatedData['firstname'],
           'lastname'=> $validatedData['lastname'],
           'image'=>  $imagePath,

        ]);

        //Generate Notification Alert for user action
        $toastMessage = GenericUtils::makeSuccessToast(function() use($result){
            if($result){
             return true;
            }else{
                return false;
             }
        },
        ['title'=> "Successful", 'message'=>"Account Info successfully updated" ],
        ['title'=> "Add Failed", 'message'=>"Attempt to update account Info failed. Please check input details" ]
        );

        switch ($toastMessage->status) {
        case true:
            $successToastMessage = $toastMessage->success ;
            $errorToastMessage = null ;

            break;
        case false:
            $errorToastMessage = $toastMessage->error ;
            $successToastMessage = null ;

            break;

        }




    $authenticatedAdmin = $adminAccountToUpdate;
    $pageTitle = "Account | Dashboard | ". env('APP_NAME');
       return view(
           'dashboard.account',
           compact('pageTitle', 'authenticatedAdmin', 'successToastMessage', 'errorToastMessage'));
   }
}
