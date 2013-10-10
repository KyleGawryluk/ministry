@extends('frontend/layouts/default')

@section('content')
<div class="row-fluid">
 <div class="span12">
   <div class="row-fluid">
     <div class="span12 white-text">
      <p class="lead">
        Grace Christian College is the answer to long prayers to meet the growing demands for 
        trained preachers and teachers for this ministry. Grace Christian College was created 
        to prepare Christian workers to help spread New Testament Christianity throughout India.
      </p>
      <p>
        There are currently 20 students at the college. This number includes first and second year 
        students.  At present, a student must complete 24 subjects within the three-year program. 
        In addition to the regular classes, students receive practical training in ministry. 
        The college provides numerous opportunities for all students to put everything into practice 
        what they are learning inside the classroom. GCC benefits from the faithful efforts of seven 
        faithful, qualified teachers.
      </p>
    </div>
  </div>
  <br>
  <div class="row-fluid">
    <div class="span4">
      <img src="{{asset('assets/img/college1.jpg')}}" alt="gcm_college" class="index-pic">
    </div>
    <div class="span4">
      <img src="{{asset('assets/img/college2.jpg')}}" alt="gcm_college" class="index-pic">
    </div>
    <div class="span4">
      <img src="{{asset('assets/img/college3.jpg')}}" alt="gcm_college" class="index-pic">
    </div>
  </div>
</div>
</div>

@stop
