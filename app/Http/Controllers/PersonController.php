<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc = Array (
            0 => 'Cedula ciudadanía',
            1 => 'Cedula extranjería',
            2 => 'Tarjeta identidad',
            3 => 'Pasaporte permanencía',
        );

        return view('person/index', compact('doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $person = Person::where('typeDoc', '=', $request['typeDoc'])
            ->where('numberDoc', '=', $request['numberDoc'])->first();

        $data = Array (
            "typeDoc" => $request['typeDoc'],
            'numberDoc' => $request['numberDoc'],
            );

        $doc = Array (
            0 => 'Cedula ciudadanía',
            1 => 'Cedula extranjería',
            2 => 'Tarjeta identidad',
            3 => 'Pasaporte permanencía',
        );

        if ($person){
            return redirect()->route('person.edit', $person->id);
        }else{
            return view('person/create', compact('data', 'doc'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person();
        $person->name       = $request['name'];
        $person->typeDoc    =   $request['typeDoc'];
        $person->numberDoc  =   $request['numberDoc'];
        $person->profession =   $request['profession'];
        $person->email      =   $request['email'];
        $person->points     =   $request['points'];
        $person->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person, $id)
    {
        $doc = Array (
            0 => 'Cedula ciudadanía',
            1 => 'Cedula extranjería',
            2 => 'Tarjeta identidad',
            3 => 'Pasaporte permanencía',
        );

        $person = Person::where('id', '=', $id)->first();
        return view('person/edit', compact('person', 'doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person, $id)
    {
        $person = Person::where('id', '=', $id)->first();
        $person->points     =   $request['points'];
        $person->save();

        $this->list(1);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $doc = Array (
            0 => 'Cedula ciudadanía',
            1 => 'Cedula extranjería',
            2 => 'Tarjeta identidad',
            3 => 'Pasaporte permanencía',
        );
        $person = DB::table('person as p')
            ->orderBy('p.points', 'desc')
            ->get();
        return view('person/shows', compact('person', 'desc'));
    }

    public function ajax(){

        $person = DB::table('person')
            ->orderBy('points', 'desc')
            ->get();

        return json_encode(array("person" => $person));
    }
}
