<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Exception;

class MailSettingController extends Controller
{
    /**
     * Display the Mail settings page if the user has the 'mail_setting' permission.
     *
     * @return View|RedirectResponse
     */
    /**
     * Display the Mail settings page.
     *
     * @return View|RedirectResponse
     */
    public function index() {
        // Load current mail settings from the environment
        $settings = [
            'mail_mailer' => env('MAIL_MAILER', ''),
            'mail_host' => env('MAIL_HOST', ''),
            'mail_port' => env('MAIL_PORT', ''),
            'mail_username' => env('MAIL_USERNAME', ''),
            'mail_password' => env('MAIL_PASSWORD', ''),
            'mail_encryption' => env('MAIL_ENCRYPTION', ''),
            'mail_from_address' => env('MAIL_FROM_ADDRESS', ''),
        ];

        return view('backend.layouts.settings.mail_settings', compact('settings'));
    }

    /**
     * Update the Mail settings in the .env file.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request) {
        $request->validate([
            'mail_mailer'       => 'nullable|string',
            'mail_host'         => 'nullable|string',
            'mail_port'         => 'nullable|string',
            'mail_username'     => 'nullable|string',
            'mail_password'     => 'nullable|string',
            'mail_encryption'   => 'nullable|string',
            'mail_from_address' => 'nullable|string',
        ]);

        try {
            $envContent = File::get(base_path('.env'));
            $lineBreak  = "\n";
            $envContent = preg_replace([
                '/MAIL_MAILER=(.*)\s*/',
                '/MAIL_HOST=(.*)\s*/',
                '/MAIL_PORT=(.*)\s*/',
                '/MAIL_USERNAME=(.*)\s*/',
                '/MAIL_PASSWORD=(.*)\s*/',
                '/MAIL_ENCRYPTION=(.*)\s*/',
                '/MAIL_FROM_ADDRESS=(.*)\s*/',
            ], [
                'MAIL_MAILER=' . $request->mail_mailer . $lineBreak,
                'MAIL_HOST=' . $request->mail_host . $lineBreak,
                'MAIL_PORT=' . $request->mail_port . $lineBreak,
                'MAIL_USERNAME=' . $request->mail_username . $lineBreak,
                'MAIL_PASSWORD=' . $request->mail_password . $lineBreak,
                'MAIL_ENCRYPTION=' . $request->mail_encryption . $lineBreak,
                'MAIL_FROM_ADDRESS=' . '"' . $request->mail_from_address . '"' . $lineBreak,
            ], $envContent);

            File::put(base_path('.env'), $envContent);
            // Artisan::call('config:cache'); // Clear config cache after updating .env

            return back()->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return back()->with('t-error', 'Failed to update');
        }
    }
}
