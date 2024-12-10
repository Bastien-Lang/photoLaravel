@extends('layout')

@section("content")
    @include("errors")
    <section class="sectionFormulaire">
        <div>
            <form action="{{route('register')}}" method="post" id="register">
                @csrf
                <input type="text" name="name" required placeholder="Name" /><br />
                <input type="email" name="email" required placeholder="Email" /><br />
                <input type="password" name="password" required placeholder="password" /><br />
                <input type="password" name="password_confirmation" required placeholder="password" /><br />
                <input type="submit" /><br />
            </form>
            <div>
                <span>Déjà un compte  ? </span>
                <a href="{{route('login')}}">Connectez vous</a>
            </div>
        </div>
    </section>
@endsection