@extends('front_end.layouts');

@section('contentPage')
<div class="container">
<div class="">
<h1 class="text text-center">Ajouter une nouvelle Photo</h1>
</div>
    <div class="row" >
        <div class="">
            <form action="" class="mt-3" method="post">
                @csrf
               
               
              
                <div class="form-group ">
                <label for="photo">Choisir une image</label>
                <input name="photo" class="form-control"  type="file">
                <!-- if any error detected in this proccessus -->
                @error('photo')
                <span class="text-danger text-center">{{$message}}</span>
                @enderror
                </div>
                
                <div class="form-group ">
                    <label for="btn">Action</label><br>
                    <button type="submit" id="btn" class="btn btn-danger">Envoyer</button>
                </div>

            </form>
            <table class="table table-hover table-bordered">
                <thead class="bg-primary">
                    <tr>
                        <th>N°</th>
                        <th>Titre</th>
                        <th>Lien</th>
                        <th>Status</th>

                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>

                   
                    <tr>
                        
                        
                        <td></d>
                        <td></d>
                    
                        <td></d>
                        <td></d>
                           <td>
                                <form method="POST" action="">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-success" href="">Modifier</a>
                            </td>
                    </tr>
                    

                </tbody>
            </table>
        </div>
        </div>
        </div>
@endsection