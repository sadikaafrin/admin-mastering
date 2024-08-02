<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class StripeSettingController extends Controller
{
    /**
     * Display the Stripe settings page.
     *
     * @return View
     */
    public function index() {
        return view('backend.layouts.settings.stripe_settings');
    }

    /**
     * Update the Stripe settings.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request) {
        $request->validate([
            'stripe_key'    => 'nullable|string',
            'stripe_secret' => 'nullable|string',
        ]);
        try {
            $envContent = File::get(base_path('.env'));
            $lineBreak  = "\n";
            $envContent = preg_replace([
                '/STRIPE_KEY=(.*)\s/',
                '/STRIPE_SECRET=(.*)\s/',
            ], [
                'STRIPE_KEY=' . $request->stripe_key . $lineBreak,
                'STRIPE_SECRET=' . $request->stripe_secret . $lineBreak,
            ], $envContent);

            if ($envContent !== null) {
                File::put(base_path('.env'), $envContent);
            }
            return redirect()->back()->with('t-success', 'Stripe Setting Update successfully.');
        } catch (Throwable) {
            return redirect()->back()->with('t-error', 'Stripe Setting Update Failed');
        }

        return redirect()->back();
    }
}
