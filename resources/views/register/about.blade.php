@extends('layout.app')

@section('content')

<div class="card card-default">
    <div class="card card-header">About</div>
    <div class="card card-body">
        <div class="container" style="overflow-x:auto;">
            <table class="table">
                <tr>
                    <th><h3>Activity</h3></th>
                    <th><h3>Description</h3></th>
                </tr>
                <tr>
                    <td>
                        <img src="{{url('/public/images/group3.jpg')}}" alt="Bible study group" class="responsive">
                    </td>
                    <td><h4>Meetings</h4>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="{{url('/public/images/catering.jpg')}}" alt="Catering" class="responsive">
                    </td>
                    <td> <h4>Fresh tea/coffee</h4>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{url('/public/images/excursion1.jpg')}}" alt="Catering" class="responsive">
                    </td>
                    <td> <h4>Excursion</h4>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </td>
                </tr>        
            </table>
        </div>
    </div>
</div>

@endsection