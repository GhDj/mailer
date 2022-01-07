<?php

namespace App\Http\Controllers;

use App\Mail\NewRDVMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendmail(Request $request)
    {

        if ($request->get("agent") == "opportunite") {
            $text = "Bonjour " . $request->get('civilite') . ' ' . $request->get('nom') . ' ' . $request->get('prenom') . "



Suite à notre entretien téléphonique du " . now()->format('d-m-Y') . " , notre RDV sera comme prévu le " . date('d-m-Y', strtotime($request->get('dateRDV'))) . " à " . date('H:i', strtotime($request->get('timeRDV'))) . "  à " . $request->get('adresse') . " avec notre responsable marketing " . $request->get('oppo') . "



Cordialement



La société Biim-com";
          //  dd($text);
        } elseif ($request->get('agent') == "page_jaune") {
            $text = "Bonjour " . $request->get('civilite') . ' ' . $request->get('nom') . ' ' . $request->get('prenom') . "



Suite à notre entretien téléphonique du " . now()->format('d-m-Y') . " , notre RDV sera comme prévu le " . date('d-m-Y', strtotime($request->get('dateRDV'))) . " à " . date('H:i', strtotime($request->get('timeRDV'))) . "  à " . $request->get('adresse') . " avec notre conseiller(e) " . $request->get('selectPj') . "



Cordialement



La société Biim-com";
        }
       // dd($text);
       try {
        Mail::to($request->get('mail'))->send(new NewRDVMail($text));
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->back()
                ->with('success', 'Created successfully!');
       } catch (\Throwable $th) {
        return redirect()->back()
        ->with('error', 'Error during the creation!');
       }

    }
}
