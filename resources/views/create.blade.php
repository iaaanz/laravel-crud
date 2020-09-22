<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>Cadastrar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-center">Cadastrar</h1> <hr>
        <div class="col-8 m-auto">
            @if(isset($errors) && count($errors)>0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">            
                    @foreach ($errors->all() as $erro)
                        {{$erro}}<br>
                    @endforeach
                </div>
            @endif
            <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
                @csrf
                <input required class="form-control" type="text" name="title" id="title" placeholder="Título:"><br>
                <select required class="form-control" name="id_user" id="id_user">
                    <option value="">Autor</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select><br>
                <input required class="form-control" type="text" name="pages" id="pages" placeholder="Páginas:"><br>
                <input required class="form-control" type="text" name="price" id="price" placeholder="Preço:"><br>
                <input required class="btn btn-primary" type="submit" value="Cadastrar">
            </form>
        </div>
    </body>
</html>
