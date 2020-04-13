<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
               <a href="/create_student">Create Student</a>
                {{Form::open(array('url' => '/student_update'))}}
               <table>
                <tr>
                    <td>Student Name</td>
                    <td>{{Form::text('name',$student->name)}}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{Form::radio('gender', 'male', $student->gender == 'male' ? 'true' : '', array('class' => 'male','id'=>'maleId'))}}Male
                        {{Form::radio('gender', 'female', $student->gender == 'female' ? 'true' : '', array('class' => 'female','id'=>'femaleId'))}}Female</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{Form::select('status', array('active' => 'Active','deactive' => 'Deactive'), $student->status, array('class' => 'status'))}}</td>

                </tr>
                <input type="hidden" name="id" value="{{$student->id}}">
                <tr>
                    <td>{{Form::submit('Submit!', array('class' => 'submit'))}}</td>
                </tr>
               </table>
                {{Form::close()}}

            </div>
        </div>
    </body>
</html>
