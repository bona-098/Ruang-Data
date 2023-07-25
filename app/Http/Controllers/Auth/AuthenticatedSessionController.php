<?php

namespace App\Http\Controllers\Auth;
// app/Http/Controllers/Auth/AuthenticatedSessionController.php

// app/Http/Controllers/Auth/AuthenticatedSessionController.php

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\LogActivities; // Import model LogActivities
use Carbon\Carbon;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        // Alert::toast('Semoga Hari mu Menyenangkan', 'success');
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Rekam aktivitas login ke dalam database
        LogActivities::create([
            'user_id' => auth()->user()->id,
            'activity' => 'login',
            'login_at' => Carbon::now('Asia/Singapore'), // Sesuaikan dengan timezone yang diinginkan
        ]);

        Alert::toast('Berhasil Login', 'success');

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Cek apakah user sedang login sebelum melakukan logout
        if (Auth::guard('web')->check()) {
            // Rekam aktivitas logout ke dalam database
            LogActivities::create([
                'user_id' => auth()->user()->id,
                'activity' => 'logout',
                'login_at' => Carbon::now('Asia/Singapore'), // Sesuaikan dengan timezone yang diinginkan
            ]);

            Auth::guard('web')->logout();
            Alert::toast('Semoga Hari mu Menyenangkan', 'success');
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect('/');
    }
}