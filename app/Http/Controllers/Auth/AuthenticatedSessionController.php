<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Order;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RoleUser;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $shipper = RoleUser::where('role_id', 3)->get();
        $driver  = RoleUser::where('role_id', 2)->get();
        $request->session()->regenerate();
        foreach($shipper as $shp)
        {
            if (Auth::user()->id == $shp->user_id) {
                if($request->session()->get('pesan'))
                {
                    $pesan = $request->session()->get('pesan');
                    $orders = new Order();
                    $orders->key                 = $pesan['key'];
                    $orders->jemput              = $pesan['jemput'];
                    $orders->nama_pengirim       = $pesan['nama_pengirim'];
                    $orders->start_time          = $pesan['start_time'];
                    $orders->arrival_time        = $pesan['arrival_time'];
                    $orders->telp_jemput         = $pesan['telp_jemput'];
                    $orders->alamat_jemput       = $pesan['alamat_jemput'];
                    $orders->armada              = $pesan['armada'];
                    $orders->jadwal              = $pesan['jadwal'];
                    $orders->feed_m              = $pesan['feed_m'];
                    $orders->nama_barang         = $pesan['nama_barang'];
                    $orders->jenis_barang        = $pesan['jenis_barang'];
                    $orders->tujuan              = $pesan['tujuan'];
                    $orders->nama_penerima       = $pesan['nama_penerima'];
                    $orders->alamat_tujuan       = $pesan['alamat_tujuan'];
                    $orders->telp_tujuan         = $pesan['telp_tujuan'];
                    $orders->user_id = Auth::id();
                    $orders->save();
                    $request->session()->forget('pesan');
                    return redirect()->route('user.detail', ['key'=>$orders->key,'id'=>$orders->id])->with('success', 'New subject has been added.');
                
                }else  
                return redirect()->route('user.dashboard');
            }
        }
        foreach($driver as $drv)
        {
            if(Auth::user()->id == $drv->user_id)
            {
                return redirect()->route('driver.index');
            }
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
