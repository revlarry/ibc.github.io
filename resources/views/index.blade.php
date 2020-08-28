@extends('layout.app')

@section('content')


<div class="card card-default">
    <div class="card card-header"></div>
    <div class="card card-body">

        <div class="row">
            <div class="col-sm-6">
                <img src="{{url('/public/images/International_Bible_Club_flyer_Nov-2019.JPG')}}" class="responsive">
                
            </div>

            <div class="col-sm-6">

                <a href="{{route('register.create')}}" class="btn btn-success btn-block">Click to Register</a>
                
                <div>
                    <marquee behavior="scroll" direction="up" style="height:350px;text-align:center;" scrollamount="2">
                    I B C (International Biblestudy Club) is designed to be a fun<br>
                     community of people seeking and exploring enduring truths applicable for every day life.
                     <br><br>
                     Every month we will have an interactive, exciting and engaging discussion. 
                     Besides, there will be other complementary recreational activities in the club.
                     There are no barriers on grounds of race, religion or gender.
                     <br><br>
                     The club's activities are intended to challenge and impact members' lives spiritually, mentally, emotionally and socially.
                    </marquee>
                    
                </div>

            </div>		
            
        </div>

    </div>

</div>

@endsection