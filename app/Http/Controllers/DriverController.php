<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Requests\DriverRequest;
use App\Vehicle;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = Driver::all();
        $vehicle = Vehicle::all();

        return view('Driver.index')
            ->with('drivers', $driver)
            ->with('vehicles', $vehicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DriverRequest $request, Driver $driver)
    {
        $file = $request->file('img');
        $name = $request->firstName.'.'.$file->getClientOriginalExtension();
        $path = public_path() . '/img/perfilConductor/';
        $file->move($path, $name);

        $driver = new Driver($request->all());
        $driver->firstName = $request->firstName;
        $driver->lastName = $request->lastName;
        $driver->ci = $request->ci;
        $driver->phone = $request->phone;
        $driver->img = $name;
//        $driver->state = $request->state;
        $driver->save();

        return redirect()->route('drivers.index')->withStatus(__('Conductor '.$driver->firstName .' guardado sastifactoria.'));
    //        https://playurbano.com/discografia/arcangel/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drivers = Driver::find($id);

        return view('Driver.show')->with('driver',$drivers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drivers = Driver::findOrFail($id);
        $vehicles = Vehicle::orderBy('id','DESC')->pluck('plate', 'id');

        return view('Driver.edit')
            ->with('vehicle',$vehicles)
            ->with('driver', $drivers);
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
        $driver = Driver::findOrFail($id);
        //$driver = Driver::findOrFail($id)->all();
        if($request->img != null) {
            $file = $request->file('img');
            $name = $request->name.'.'.$file->getClientOriginalExtension();
            $path = public_path() . '/img/perfilConductor/';
            $file->move($path, $name);
            $driver->img = $name;
        }
        $driver->firstName= $request->firstName;
        $driver->lastName= $request->lastName;
        $driver->ci = $request->ci;
        $driver->phone = $request->phone;
        $driver->save();


        return redirect()->route('drivers.index')->withStatus(__('Datos del conductor actualizado satisfactoriamente.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect()->route('drivers.index')->withStatus(__('Conductor eliminado satisfactoriamente.'));
    }
}
