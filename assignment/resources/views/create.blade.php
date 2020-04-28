<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
</nav>

<div class="container">

    @if (isset($errors) && $errors->any())
        <div class="row">
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="row">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="row">

        <form action="" method="post">
            {{  csrf_field() }}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <select name="colleague_email" class="form-control">
                            <option value="">Selecteer een collega</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <textarea required name="messagecontent" class="form-control" rows="5"
                              placeholder="Plaats hier je bericht*"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Versleutel bericht</button>
        </form>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
