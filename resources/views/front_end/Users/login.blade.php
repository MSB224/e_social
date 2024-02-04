<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS 
    ================================================== -->
    <link href="{{asset('assets/css1/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css') }}" >
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    <link href="{{asset('assets/css/tailwind.css') }}" rel="stylesheet">

    <title>E-Social</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xl-5 col-sm-6 offset-md-4 offset-xl-4 offset-sm-2">
                <h3 class="mt-5 text-secondary">E-SOCIAL </h3>
                <form action="{{route('connectUser') }}" method="POST">
                    @csrf
                    @method('POST')

                        <div class="row card mt-4 pb-5 form1">
                            <div class="col-md-6 col-xl-6 offset-xl-3 offset-sm-3 offset-md-3 col-sm-12">
                                <h3 class="mt-2 text-secondary">Authentification</h3>
                            </div>

                            <div class="col-md-8 col-xl-8 col-sm-auto offset-md-2 offset-xl-2 mt-2">
                                <div class="form-group">
                                    <input type="text" name="telephone" class="form-control" placeholder="telephone">
                                    @error('telephone')
                                        <span>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-8 col-xl-8 offset-md-2 offset-xl-2  mt-4">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    @error('password')
                                       <span>{{$message}}</span> 
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-8 offset-3 mt-4 ">
                               <button type="submit" class="btn btn-danger px-5">Connexion</button>

                            </div>
                            <div class="col-md-8 col-xl-8 offset-8 mt-3 ">
                            @method('')
                                <a class="" href="{{ route('UsersRoute') }}">Creér un Compte</a>
                             </div>
                            <div class="col-md-12 col-xl-12 offset-0 mt-4">



                            </div>

                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
