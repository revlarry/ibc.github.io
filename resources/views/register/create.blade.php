@extends('layout.app')


@section('content')
<div class="card card-default">
    <div class="card card-header"></div>
    <div class="card card-body">

        <div class="row">
            <div class="col-sm-5">                
                <img src="{{url('/public/images/International_Bible_Club_flyer_Nov-2019.JPG')}}" class="responsive">                 
            </div>

            <div class="col-sm-2"></div>

            <div class="col-sm-5">

                @if($errors->any())

                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-group-item text-danger">
                            {{$error}}
                        </li>
                        @endforeach
                                         
                    </ul>
                </div>
                @endif
            
                <form action="{{route('register.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <table cellpadding="10">
                            <tr>
                                <td><label for="fname">First name<sup style="color: red;">*</sup></label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Your first name"  required></td>

                                <td><label for="lname">Last name<sup style="color: red;">*</sup></label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Your last name" required></td>
                            </tr>

                            <tr>
                                <td><label for="email">Email<sup style="color: red;">*</sup></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder=" info@example.com" required>
                                </td>

                                <td><label for="telephone">Telephone<sup style="color: red;">*</sup></label>
                                    <input type="number" class="form-control" name="telephone" id="telephone" placeholder=" Your tel. number" required>
                                </td>

                            </tr>
                        </table>					 
                    </div>

                    <table><tr>
                        <td>
                            <div class="form-group">
                                <label for="age">Age - Please select your group:<sup style="color: red;">*</sup></label> <br>
                                <input type="radio" name="age" value="0 - 30" > 0 - 30<br>
                                <input type="radio" name="age" value="31 - 60"> 31 - 60<br>
                                <input type="radio" name="age" value="61 - 100"> 61 - 100<br>  					
                            </div>
                        </td>

                        <td>
                            <div class="form-group">
                                <label for="gender">Gender</label><br> 						
                                    <input type="radio"  name="gender" id="gender" value="Male" >Male
                                    <input type="radio" name="gender" id="gender" value="Female">Female
                            </div>
                        </td>
                        </tr></table>


                    <div class="form-group">
                        <label for="churchgoer">Are You Already Part of A Church?</label>

                        <div class="radio">
                            <label><input type="radio"  name="churchgoer" id="churchgoer" value="Yes"> I attend church
                            </label>

                            <label>
                                <input type="radio"  name="churchgoer" id="churchgoer" value="No">I don't attend church
                            </label>
                        </div>									
                    </div>

                    <div class="form-group">
                        <label >Topics of interest (you may check more than one)...</label>

                        <div class="from-group">
                            <table>
                                <tr>
                                    <td><input type="checkbox"  name="topic1" id="topic1"> Money / Financial Principles <input type="hidden" name="topic1txt" value="Money / Financial Principlesy"></td>
                                    <td>&nbsp<input type="checkbox"  name="topic2" id="topic2"> The End-time Issues: Real or Fallacy <input type="hidden" name="topic2txt" value="The End-time Issues: Real or Fallacy"> </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"  name="topic3" id="topic3"> Dealing with forgiveness <input type="hidden" name="topic3txt" value="Dealing with forgiveness"></td>
                                    <td>&nbsp<input type="checkbox"  name="topic4" id="topic4"> Overcoming Loneliness <input type="hidden" name="topic4txt" value="Overcoming Loneliness"> </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"  name="topic5" id="topic5"> Technology <input type="hidden" name="topic5txt" value="Technology"></td>
                                    <td>&nbsp<input type="checkbox"  name="topic6" id="topic6"> Other <input type="text" name="topic6txt"></td>
                                </tr>							
                            </table>
                        </div>	
                    </div>

                    <div>
                        <input type="checkbox" name="privacyOK" id="privacyOK"> Please agree to our <a href="#">privacy policy</a>
                    </div>
                   <br>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                    </div>

                </form>

            </div>		
            
        </div>

    </div>

</div>


@endsection