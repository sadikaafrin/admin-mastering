<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Exception;
use App\Helpers\Helper;
use App\Http\Requests\Auth\RegisterRequest;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user=User::find($request->id);
        return view('backend.layouts.settings.profile_settings',compact('user'));
    }

    public function UpdateProfile(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'  => 'nullable|max:100|min:2',
            'email' => 'nullable|email|unique:users,email,' . auth()->user()->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $user        = User::find(auth()->user()->id);
            $user->name  = $request->name;
            $user->email = $request->email;

            $user->save();
            return redirect()->back()->with('t-success', 'Profile updated successfully');
        } catch (Exception) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }

    /**
     * Update the user's password.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function UpdatePassword(Request $request) {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password'     => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $user = Auth::user();
            if (Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect()->back()->with('t-success', 'Password updated successfully');
            } else {
                return redirect()->back()->with('t-error', 'Current password is incorrect');
            }
        } catch (Exception) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }


    public function UpdateProfilePicture(Request $request)
{
    $request->validate([
        'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    try {
        $user = Auth::user();
        $image = $request->file('profile_picture');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Check if there's an existing profile picture
        if ($user->avatar && file_exists(public_path($user->avatar))) {
            Helper::fileDelete(public_path($user->avatar));
        }

        // Use the Helper class to handle the file upload
        $imagePath = Helper::fileUpload($image, 'profile', $imageName);

        if ($imagePath === null) {
            throw new Exception('Failed to upload image.');
        }

        // Update user's avatar with the new image path
        $user->avatar = $imagePath;
        $user->save();

        return response()->json([
            'success' => true,
            'image_url' => asset($imagePath)
        ]);
    } catch (Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ]);
    }
}
}
