@extends('front_end.layouts');

@section('contentPage')
<div class="container card">
<div class="">
<h1 class="text text-center">Ajouter une nouvelle publication</h1>
</div>
    <div class="row" >
        <div class="">
            <form action="{{route('newPublication') }}" class="mt-3" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label for="titre">Titre</label>
                    <input name="titre" id="titre" type="text" class="form-control">
                    @error('titre')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="description">Description</label>
                    <input name="description" id="Description" type="text" class="form-control">
                    @error('Description')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="image">Image</label>
                    <input name="images" id="image" type="file" class="form-control">
                    @error('images')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group ">
                <label for="status">Status</label>
                <input name="status" class="form-control"  type="text">
                <!-- if any error detected in this proccessus -->
                @error('status')
                <span class="text-danger text-center">{{$message}}</span>
                @enderror
                </div>
                
                <div class="form-group ">
                    <label for="btn">Action</label><br>
                    <button type="submit" id="btn" class="btn btn-danger">Envoyer</button>
                </div>

            </form>
            <!-- <table class="table table-hover table-bordered">
                <thead class="bg-primary">
                    <tr>
                        <th>N°</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Image</th>
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
            </table> -->
        </div>
        </div>
        </div>
@endsection