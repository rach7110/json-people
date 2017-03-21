<?php

class PeopleController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$people = People::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//VALIDATE USER INPUT IS JSON
		$people_json = json_decode(Input::get('people'));

		if( !$people_json )
		{
			return Redirect::to('/')->with('message', "Oops! It appears you didn't enter proper json format. Here's a quick reference guide: <a href='http://secretgeek.net/json_3mins' target='_blank'>3-Minute Guide to Json</a>")->with('alert-class', "alert-warning");
		}

    
    // this should be a fucntion in the People model
    $persons = $people_json->data;
    $emails = [];

    foreach ($persons as $person) {
      $emails[] = $person->email;
    }

    $email_list = implode(',', $emails);
    // end function

    // this should be a fucntion in the People model

    // Sort the array using a user defined function
    usort($persons, function($a, $b) { 
      return $a->age > $b->age ? -1 : 1; //Compare ages
    });

    print_r($persons);   


    //


	}

	// {
	// 	"data":[
	// 		{ "first_name":"matt", "last_name":"stauffer", "age":31, "email":"matt@stauffer.com", "secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},
	// 		{"first_name":"dan", "last_name":"sheetz", "age":99, "email": "dan@sheetz.com", "secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu" }
	// 		]
	// 	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */ 
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
