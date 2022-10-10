@extends('Layout.default')
@section('header')
    <header>@include('Includes.nav')</header>
@endsection
@section('content')
    <section>
        <div class="container containerBusinesses">
            <div class="space-title">
                <h3 class="text-title">Cadastro de Businesses</h3>
            </div>
            <form method="post" action="{{route('business.store')}}">
                @csrf
                <div class="input">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        onfocusout = "focoItem(this)"
                        value="{{old('name')}}"
                    >
                    <label for="name">Nome</label>
                    @error('name')<span class="error">{{$message}}</span>@enderror
                </div>
                <div class="input">
                    <input
                        type="text"
                        name="email"
                        onfocusout = "focoItem(this)"
                        value="{{old('email')}}"
                    >
                    <label for="email">Email</label>
                    @error('email')<span class="error">{{$message}}</span>@enderror
                </div>
                <div class="input">
                    <input
                        type="text"
                        name="address"
                        onfocusout = "focoItem(this)"
                        value="{{old('address')}}"
                    >
                    <label for="address">Endereço</label>
                    @error('address')<span class="error">{{$message}}</span>@enderror
                </div>
                <div class="submit">
                    <button type="submit">Salvar</button>
                </div>
            </form>
            <hr>
            <hr>
            @foreach($businesses as $business)
                {{ $business->name }} ({{ $business->email }}) <br>
            @endforeach

        </div>
    </section>
@endsection
@section('footer')
    <footer>@include('Includes.footer') </footer>
    <script src="{{Vite::asset('resources/js/app.js')}}" defer></script>
@endsection
