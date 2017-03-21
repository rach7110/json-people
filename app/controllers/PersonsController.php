<?php

class PersonsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		$people = json_decode(Input::get('people'));

		if( !$people )
		{
			return Redirect::to('/')->with('message', "Oops! It appears you didn't enter proper json format. Here's a quick reference guide: <a href='http://secretgeek.net/json_3mins' target='_blank'>3-Minute Guide to Json</a>")->with('alert-class', "alert-warning");
		}

			//do some logic
		// echo "<pre>";
		// print_r($people->data[0]);
		// echo "</pre>";
    // $number_persons = count($people->data);
    // echo "You submitted " . $number_persons . " people.";

    $persons = $people->data;
    $emails = [];

    foreach ($persons as $person) {
      $emails[] = $person->email;
    }

    $email_list = implode(',', $emails);
    var_dump($email_list);


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
