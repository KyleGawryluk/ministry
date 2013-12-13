@extends('frontend/layouts/default')

@section('content')
<div class="row-fluid">
    <div class="span6">
        <img src="{{asset('assets/img/kids.jpg')}}" class="img-rounded index-pic" alt="">
    </div>
    <div class="span6 white-text">
        <p>
            <strong>
                Grace Christian Ministry is a mission in Pathanapuram, in the state of Kerala, India. 
                GCM was founded and is maintained by Babu Samuel.
            </strong>
        </p>
        <p>
            <a href="{{URL::to('about-babu')}}">Babu Samuel</a> is a native of Kerala State in southern 
            <a href="{{URL::to('about-india')}}">India</a>. He became a Christian in 1977.  As he received 
            a call by God into ministry, he entered a Bible College in Madras, <a href="{{URL::to('about-india')}}">India</a>, where he studied for 
            four years graduating with a Bachelor of Theology degree.
        </p>
        <p>
            Grace Christian College is the answer to long prayers to meet the growing demands for trained 
            preachers and teachers for this ministry. Grace Christian College was created to prepare 
            Christian workers to help spread New Testament Christianity throughout India.
        </p>
    </div>
</div>
<hr>
<div class="row-fluid">

    <div class="span12 thumbnail white-menu">
        <div class="row-fluid">
            <div class="span4 white-text">
                <h2>Sponsor a Pastor</h2>
                <p>
                   The Pastor Sponsorship Program is for ground level partnering with pastors in training. 
                   These investments ensure that partnering pastors receive theological education, 
                   and allow believers in the States to connect with them through prayer and ministry
                   updates.
               </p>
           </div>
       @foreach($pastors as $pastor)
            <div class="span2 thumbnail pastor">
                <a href="{{URL::to('pastors/'.$pastor->id)}}">
                 <div class="pastor-div text-center">
                    <img src="{{asset('assets/img/pastors/'.$pastor->image_name)}}" alt="pastor" class="pastor-img">
                 </div>
                <div class=" text-center">
                    <h4>{{$pastor->name}} <br>
                        <small>{{$pastor->title}}</small>
                        <br>
                        <small>{{$pastor->church}}</small>
                    </h4>
                </div>
                </a>
            </div>
       @endforeach

    
</div>
</div>
<hr>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail white-menu">
            <a class="white-text" href="{{URL::to('college')}}">
                <img class="index-pic img-rounded" src="{{asset('assets/img/graduation.jpg')}}" alt="">
                <h3>Bible College</h3>
                <p>
                    There are currently 20 students at the college
                </p>
            </a>
        </div>
    </li>
    <li class="span4">
        <div class="thumbnail white-menu">
            <a class="white-text" href="{{URL::to('blog')}}">
                <img class="index-pic img-rounded" src="{{asset('assets/img/believe.jpg')}}" alt="">
                <h3>Babu's Blog</h3>
                <p>
                    Follow Babu as he tells of the growth, prospects and adventures of the ministry
                </p>
            </a>
        </div>
    </li>
    <li class="span4">
        <div class="thumbnail white-menu">
            <a class="white-text" href="">
                <img class="index-pic img-rounded" src="{{asset('assets/img/GCM Cover.jpg')}}" alt="" style="width:100%">
                <h3>Contribute</h3>
                <p>
                    Explore ways to help Grace Christian Ministries
                </p>
            </a>
        </div>
    </li>
</ul>
@stop
