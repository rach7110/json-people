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
    $json = json_decode(Input::get('people'));

    // DISPLAY ERROR MESSAGE IF USER DID NOT ENTER CORRECT JSON FORMAT":
    if( !$json )
    {
      return Redirect::to('/')->with('message', "Oops! It appears you didn't enter proper json format. Here's a quick reference guide: <a href='http://secretgeek.net/json_3mins' target='_blank'>3-Minute Guide to Json</a>")->with('alert-class', "alert-warning");
    }

    // GET EMAILS &
    // CREATE FULL NAME VALUE FOR PEOPLE:
    $people_data = $json->data;
    $emails = [];

    foreach ($people_data as $person) {
      $emails[] = $person->email;
      $person->name = $person->first_name . ' ' . $person->last_name; // INSERT A 'NAME' VALUE
    }

    $email_list = implode(',', $emails);

    //SORT PEOPLE DESCENDING BY AGE:
    usort($people_data, function($a, $b) { 
      return $a->age > $b->age ? -1 : 1; //Compare ages
    });

    $age_sorted = new stdClass();
    $age_sorted->data = $people_data;

    $json_age_sorted = json_encode($age_sorted);

    // SAVE REFORMATTED PEOPLE INFO:
    $people = new People;
    $people->emails = $email_list;
    $people->age_sorted = $json_age_sorted;

    if ( $people->save() )
    {
      return Redirect::to('/')->with('message', "You have successfully added some people to the database!")->with('alert-class', "alert-success");

    }


  }

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
