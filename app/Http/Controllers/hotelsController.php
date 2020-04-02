public function create(Request $request)
    {
        $name = $request->input('hotelfomr');
    }
}

public function store(Request $request)
    {
        $name = $request->input('hotelform');
        Hotel::create([‘field1’ => $request->input(‘form_field_1’), ‘field2’ => $request->input(‘form_field_2’)]);
    }
}

return redirect('/hotels')->withInput();
