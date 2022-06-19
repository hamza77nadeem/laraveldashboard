<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = Product::all();
        
        $student = Product::Paginate(6);
        return view('home2', compact('student'));
    }
    public function create()
    {
        return view('create');
    }
    public function vehiclesFunc()
    {
        $student = Product::all();
        $student = Product::Paginate(8);
        return view('my-vehicles', compact('student'));

    }
    public function dashboard1()
    {
        $student = Product::all();
        return view('admin.dashboard', compact('student'));

    }
    public function dashboard2()
    {
        $student = Product::all();
        return view('admin.dashboard2', compact('student'));

    }
    public function dashboard3()
    {
        $student = Product::all();
        return view('admin.dashboard3', compact('student'));

    }
    public function dashboard4()
    {
        $student = User::all();
        return view('admin.dashboard4', compact('student'));

    }
    public function listingFunc()
    {
        $student = Product::all();
        $student = Product::Paginate(12);
        return view('listing-grid', compact('student'));
        
    }
    public function getUserDetail($id){
        
        $student = Product::find($id);
        return view('id', compact('student'));
    }
    public function store(Request $request)
    {
        $student = new Product;
        $student->vehicle_title = $request->input('vehicle_title');
        $student->brand = $request->input('brand');
        $student->model = $request->input('model');
        $student->vehicle_desc = $request->input('vehicle_desc');
        $student->price = $request->input('price');
        if($request->hasfile('upload1'))
        {
            $file = $request->file('upload1');
            
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $student->upload1 = $filename;
        }
        // if($request->hasfile('upload2'))
        // {
        //     $file = $request->file('upload2');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/students/', $filename);
        //     $student->upload2 = $filename;
        // }
        // if($request->hasfile('upload3'))
        // {
        //     $file = $request->file('upload3');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/students/', $filename);
        //     $student->upload3 = $filename;
        // }
        // if($request->hasfile('upload4'))
        // {
        //     $file = $request->file('upload4');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/students/', $filename);
        //     $student->upload4 = $filename;
        // }
        $student->model_year = $request->input('model_year');
        $student->km = $request->input('km');
        $student->fuel_type = $request->input('fuel_type');
        $student->engine_type = $request->input('engine_type');
        $student->engine_desc = $request->input('engine_desc');
        $student->no_of_cylinder = $request->input('no_of_cylinder');
        $student->mileage_highway = $request->input('mileage_highway');
        $student->fuel_tank = $request->input('fuel_tank');
        $student->seating_capacity = $request->input('seating_capacity');
        $student->air_conditioner = $request->input('air_conditioner');
        $student->power_door = $request->input('power_door');
        $student->antilook = $request->input('antilook');
        $student->brake = $request->input('brake');
        $student->Steering = $request->input('Steering');
        $student->Airbag = $request->input('Airbag');
        $student->Player = $request->input('Player');
        $student->car = $request->input('car');
        $student->save();
        return redirect('my-vehicles');
    }
    public function destroy($id)
    {
        $student = Product::destroy($id);
       return redirect('my-vehicles');
    }
    public function destroy1($id)
    {
        $student = Product::destroy($id);
       return redirect('admin');
    }
    public function destroy2($id)
    {
        $student = Product::destroy($id);
       return redirect('admin2');
    }
    public function destroy3($id)
    {
        $student = Product::destroy($id);
       return redirect('admin3');
    }
    public function destroy4($id)
    {
        $student = Product::destroy($id);
       return redirect('admin4');
    }
}
