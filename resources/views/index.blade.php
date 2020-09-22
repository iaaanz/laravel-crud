<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-center">Crud</h1>
        <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}">
                <button class="btn btn-success">Cadastrar</button>
            </a>
        </div>
        <div class="col-8 m-auto">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                    </tr>
                </tbody>
                    {{--  --}}
                    @foreach ($book as $books)
                    @php
                        $user = $books->find($books->id)->relUsers;
                    @endphp
                    <tr>
                        <td scope="row">{{$books->id}}</td>
                        <td>{{$books->title}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$books->price}}</td>
                        <td>
                        <a href="{{url("books/$books->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
