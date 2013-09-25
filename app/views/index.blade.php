@extends('frontend/layouts/default')

@section('content')
<div class="row-fluid">
    <div class="span4">
        <img src="{{asset('assets/img/kids.jpg')}}" class="img-rounded" alt="">
    </div>
    <div class="span8 white-text">
        <p>
            Grace Christian Ministry is a mission in Pathanapuram, in the state of Kerala, India. 
            GCM was founded and is maintained by Babu Samuel.
        </p>
        <p>
            Babu Samuel is a native of Kerala State in southern India. He became a Christian in 1977.  As he received a call by God into ministry, he entered a Bible College in Madras, India, where he studied for four years graduating with a Bachelor of Theology degree.
        </p>
        <p>
            Grace Christian College is the answer to long prayers to meet the growing demands for trained preachers and teachers for this ministry. Grace Christian College was created to prepare Christian workers to help spread New Testament Christianity throughout India.
        </p>
    </div>
</div>
<hr>
<ul class="thumbnails">
    <li class="span4">
        <div class="thumbnail white-menu">
            <a class="white-text" href="">
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
            <a class="white-text" href="">
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
                <img class="index-pic img-rounded" src="{{asset('assets/img/GCM Cover.jpg')}}" alt="">
                <h3>Contribute</h3>
                <p>
                    Explore ways to help Grace Christian Ministries
                </p>
            </a>
        </div>
    </li>
</ul>
@stop
