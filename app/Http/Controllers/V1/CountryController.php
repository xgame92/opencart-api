<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OcCountry;
use JWTAuth;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = OcCountry::all();
        return response()->json($countries, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'iso_code_2' => 'required',
            'iso_code_3' => 'required',
            'address_format' => 'required',
            'postcode_required' => 'required',
            'status' => 'required'
        ]);

        $name = $request->input('name');
		$iso_code_2 = $request->input('iso_code_2');
		$iso_code_3 = $request->input('iso_code_3');
		$address_format = $request->input('address_format');
		$postcode_required = $request->input('postcode_required');
		$status = $request->input('status');

		$country = new OcCountry([
            'name' => $name,
            'iso_code_2' => $iso_code_2,
            'iso_code_3' => $iso_code_3,
            'address_format' => $address_format,
            'postcode_required' => $postcode_required,
            'status' => $status
        ]);

        if($country->save()){
            $country->view_country =[
                'href' => 'api/v1/countries/' . $country->country_id,
                'method' => 'GET'
            ];
        }

        $message = [
          'msg' => 'Country created',
          'country' => $country
        ];
        return response()->json($message, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $country = OcCountry::findOrFail(1);
        return response()->json($country, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
