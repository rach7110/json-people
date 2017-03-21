<?php 
  class People extends Eloquent {

    protected $table = 'people';

    protected $fillable = array('emails', 'age_sorted' );

  }

?>