@extends('welcome')
<link href="{{asset('frontend/css/table.css')}}"  rel="stylesheet">
{{--<link href="{{asset('frontend/css/find_mates.css')}}"  rel="stylesheet">--}}
@section('content')


        <div class="header_fixed">
            <table>
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Program</th>
                    <th>school</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="{{asset('frontend/img/carousel-1.jpg')}}" /></td>
                    <td>Rakhi Gupta</td>
                    <td>rakhigupta@gmail.com</td>
                    <td>Engineering</td>
                    <td>KNUST</td>
                    <td><button>View</button></td>
                </tr>
                <tr>
                    <td><img src= /></td>
                    <td>Anjali</td>
                    <td>anjali@gmail.com</td>
                    <td>Engineering</td>
                    <td>UPSA</td>
                    <td><button>View</button></td>
                </tr>
                <tr>

                    <td><img src= /></td>
                    <td>Vejata Gupta</td>
                    <td>Vejata@gmail.com</td>
                    <td>Engineering</td>
                    <td></td>
                    <td><button>View</button></td>
                </tr>
                <tr>
                    <td><img src= /></td>
                    <td>Shweta</td>
                    <td>Shweta@gmail.com</td>
                    <td>Engineering</td>
                    <td></td>
                    <td><button>View</button></td>
                </tr>
                <tr>
                    <td><img src= /></td>
                    <td>Adarsh</td>
                    <td>Adarsh@gmail.com</td>
                    <td>Engineering</td>
                    <td></td>
                    <td><button>View</button></td>
                </tr>
                <tr>
                    <td><img src= /></td>
                    <td>Monti</td>
                    <td>Monti@gmail.com</td>
                    <td>Engineering</td>
                    <td></td>
                    <td><button>View</button></td>
                </tr>
                <tr>
                    <td><img src= /></td>
                    <td>Arpit</td>
                    <td>Arpit@gmail.com</td>
                    <td>Engineering</td>
                    <td></td>
                    <td><button>View</button></td>
                </tr>
                <tr>
                    <td><img src= /></td>
                    <td>Priya</td>
                    <td>priya@gmail.com</td>
                    <td>Engineering</td>
                    <td></td>
                    <td><button>View</button></td>
                </tr>
                <tr>
                    <td><img src=/></td>
                    <td>Priya</td>
                    <td>priya@gmail.com</td>
                    <td>Engineering</td>
                    <td></td>
                    <td><button>View</button></td>
                </tr>
                </tbody>
            </table>
        </div>



@endsection
