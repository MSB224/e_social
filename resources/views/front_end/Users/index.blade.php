 <!-- CSS 
    ================================================== -->
    <link href="{{asset('assets/css1/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.css') }}" >
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    <link href="{{asset('assets/css/tailwind.css') }}" rel="stylesheet">



<div class="container card ">
   <div class="row ">
        <div class="">
            <form action="{{ route('createNewUserStore') }}" class="mt-3" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="nom">Nom</label>
                    <input name="nom" id="nom" type="text" class="form-control">
                    @error('nom')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Prenom</label>
                    <input name="prenom" id="prenom" type="text" class="form-control">
                    @error('prenom')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="Telephone">Telephone</label>
                    <input name="telephone" id="telephone" type="text" class="form-control">
                    @error('telephone')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input name="email" id="nom" type="text" class="form-control">
                    @error('Email')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pseudo">pseudo</label>
                    <input name="pseudo" id="pseudo" type="text" class="form-control">
                    @error('pseudo')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group col-md-6">
                    <label for="avatar">Avatar</label>
                    <input name="avatar" id="avatar" type="file" class="form-control">
                    @error('avatar')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group col-md-6">
                    <label for="couverture">photo de couverture</label>
                    <input name="couverture" id="couverture" type="file" class="form-control">
                    @error('couverture')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group col-md-6">
                    <label for="status">Status</label>
                    <input name="status" id="status" type="text" class="form-control">
                    @error('status')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group col-md-6">
                    <label for="biographie">biographie</label>
                    <input name="biographie" id="biographie" type="text" class="form-control">
                    @error('biographie')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Mot de passe</label>
                    <input name="password" id="password" type="password" class="form-control">
                    @error('password')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="password_confirmation">Confirmation du mot de passe</label>
                    <input name="password_confirmation" id="password_confirmation" type="password" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="btn">Action</label><br>
                    <button type="submit" id="btn" class="btn btn-danger">Envoyer</button>
                </div>
            </form>
                    <form action="{{ route('UsersRouteLogin') }}" method="post">
                    @csrf
                    {{method_field('POST')}}
                     <label for="btnSeConnecter">Deja un commpte?</label><br>
                    <a href="{{ route('UsersRouteLogin') }}">Se connecter</a>
                    </form>
        </div>
    </div>
    </div>
    