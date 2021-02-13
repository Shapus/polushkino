    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@extends('layouts.app')

@section('content')
    <div class="row bg-white py-5 justify-content-center">
        <div class="col-md-10 panel panel-primary my-2">
            <div class="panel-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        Не удалось загрузить файл.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Auth::check())
                <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Загрузить</button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
        <div class="col-md-10 text-dark">
            @if (count($files ?? '') > 0)
            <table class="table table-striped">
                <tr>
                    <th class=""></th>
                    <th style="width:10%"></th>
                    @if(Auth::check())
                    <th style="width:10%"></th>
                    @endif
                </tr>
                @foreach ($files as $file)
                <tr><!---->
                    <td class="align-middle">{{ basename($file) }}</td>
                    <td class="align-middle"><a class="" href="{{ asset('uploads') }}/{{ basename($file) }}" download>Скачать</a></td>
                    @if(Auth::check())
                    <td>
                        <a class="btn btn-outline-danger" href="{{ route('file.delete', ['filename'=>basename($file)]) }}">Удалить</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </table>
            @else
            <p>Здесь пока ничего нет</p>
            @endif
        </div>
    </div>
@endsection