<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show($tab = null)
    {
        // Set the default tab if none is provided
        $tab = $tab ?: 'hubungan';

        // Check if the tab matches one of the allowed tabs
        if (!in_array($tab, ['hubungan', 'hmanajemen', 'administrasi', 'program'])) {
            abort(404);
        }

        // Return the main Formulir view, passing the current tab
        return view('pages.form.index', ['tab' => $tab]);
    }
}



