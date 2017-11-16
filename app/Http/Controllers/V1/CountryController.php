<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\OcCountry;
use App\Queries\V1\OpencartQueryBuilder;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        $country_id = Input::get('country_id');
        $name = Input::get('name');
        $iso_code_2 = Input::get('iso_code_2');
        $iso_code_3 = Input::get('iso_code_3');
        $address_format = Input::get('address_format');
        $postcode_required = Input::get('postcode_required');
        $status = Input::get('status');
        /*
                $country2 = new OcCountry([
                    'country_id' => (int)$country_id,
                    'name' => $name,
                    'iso_code_2' => $iso_code_2,
                    'iso_code_3' => $iso_code_3,
                    'address_format' => $address_format,
                    'postcode_required' => $postcode_required,
                    'status' => $status,
                ]);
                $operatorArray = ['==','like','==','==','==','==','=='];

                $query = (new OcCountry())->newQuery();
                $query = OpencartQueryBuilder::Build($query,$country,$operatorArray);
        */

        $country = (new OcCountry())->newQuery();
        if (!is_null($country_id)) {
            $country->where('country_id', $country_id);
        }
        if (!is_null($name)) {
            $country->where('name', 'like', $name.'%');
        }
        if (!is_null($iso_code_2)) {
            $country->where('iso_code_2', $iso_code_2);
        }
        if (!is_null($iso_code_3)) {
            $country->where('iso_code_3', $iso_code_3);
        }
        if (!is_null($address_format)) {
            $country->where('address_format', $address_format);
        }
        if (!is_null($postcode_required)) {
            $country->where('postcode_required', $postcode_required);
        }
        if (!is_null($status)) {
            $country->where('status', $status);
        }

        // $countries = OcCountry::all();

        // $country->where('name',$name);
        return response()->json($country->get(), 200);
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name'              => 'required',
                'iso_code_2'        => 'required',
                'iso_code_3'        => 'required',
                'address_format'    => 'required',
                'postcode_required' => 'required',
                'status'            => 'required',
            ]);

        $name = $request->input('name');
        $iso_code_2 = $request->input('iso_code_2');
        $iso_code_3 = $request->input('iso_code_3');
        $address_format = $request->input('address_format');
        $postcode_required = $request->input('postcode_required');
        $status = $request->input('status');

        $country = new OcCountry([
                'name'              => $name,
                'iso_code_2'        => $iso_code_2,
                'iso_code_3'        => $iso_code_3,
                'address_format'    => $address_format,
                'postcode_required' => $postcode_required,
                'status'            => $status,
            ]);

        if ($country = OcCountry::create($request->all())) {
            $country->view_country = [
                    'href'   => 'api/v1/countries/'.$country->country_id,
                    'method' => 'GET',
                ];
        }

        $message = [
                'msg'     => 'Country created',
                'country' => $country,
            ];

        return response()->json($message, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $country = OcCountry::findOrFail($id);

            return response()->json($country, 200);
        } catch (Exception $e) {
            return response()->json(['msg' => 'There is problem with SQL Query', 'error' => $e], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OcCountry $country)
    {
        try {
            $country->update($request->all());

            return response()->json($country, 200);
        } catch (QueryException $e) {
            return response()->json(['msg' => 'There is problem with SQL Query', 'error' => $e->errorInfo[2]], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
