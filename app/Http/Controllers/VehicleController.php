<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Requests\VehicleResquest;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Vehicle::all();

        return view('Vehicle.index')->with('cars', $car);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = Driver::orderBy('id','DESC')->pluck('firstName','id');
        $status = Vehicle::orderBy('status','DESC')->pluck('status','status');

        return view('Vehicle.create')
            ->with('driver',$drivers)
            ->with('statu',$status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleResquest $request, Vehicle $car)
    {
        $file = $request->file('img');
        $name = $request->name.'.'.$file->getClientOriginalExtension();
        $path = public_path() . '/img/infoVehiculo/';
        $file->move($path, $name);

        $vehicle = new Vehicle($request->all());

        $vehicle->img = $name;
        $vehicle->name = $request->name;
        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->img = $request->img;
        $vehicle->type = $request->type;
        $vehicle->plate = $request->plate;
        $vehicle->status = $request->status;
        $vehicle->driverId = $request->driverId;
        if ($request->driverId != null){
            $vehicle->state = 'ocupado';
        }

        $driver = Driver::find($request->driverId);
        $driver->state = 'ocupado';
//        dd($vehicle,$driver);
        $driver->save();
        $vehicle->save();

        return redirect()->route('vehicles.index')->withStatus(__('Vehículo guardado sastifactoria.'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);

        return view('Vehicle.show')->with('car',$vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $drivers = Driver::orderBy('id','DESC')->pluck('firstName', 'id');
        $status = Vehicle::orderBy('status','DESC')->pluck('status','status');

        return view('Vehicle.edit')
            ->with('statu',$status)
            ->with('driver', $drivers)
            ->with('car', $vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Vehicle::findOrFail($id);

        if($request->img != null) {
            $file = $request->file('img');
            $name = $request->name.'.'.$file->getClientOriginalExtension();
            $path = public_path() . '/img/infoVehiculo/';
            $file->move($path, $name);
            $car->img = $name;
        }
        $car->name = $request->name;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->img = $request->img;
        $car->type = $request->type;
        $car->plate = $request->plate;
        $car->status = $request->status;
        $car->driverId = $request->driverId;
        if ($request->driverId == null){
            $car->state = 'disponible';
        }else {
            $car->state = 'ocupado';
        }

        $driver = Driver::find($request->driverId);
        $driver->state = 'ocupado';
//        dd($vehicle,$driver);
        $driver->save();
        $car->save();

        return redirect()->route('vehicles.index')->withStatus(__('Vehículo actualizado satisfactoriamente.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Vehicle $id)
    {
//        $car = Vehicle::find($id);
//        $driveIDr = $car->id;
//        $driver = Driver::find($s->id);
//        $s = $id;
//        dd($car,$driveIDr);
//        $vehicle->delete();
//        $car->id;

//        $driver->state = 'disponible';
//        $driver->save();

        return redirect()->route('vehicles.index')->withStatus(__('Vehículo eliminado satisfactoriamente.'));
    }
}
