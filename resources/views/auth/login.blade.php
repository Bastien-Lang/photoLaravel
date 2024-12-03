@extends('layout')

@section("content")
    @include("errors")
    <section class="sectionFormulaire">
        <form action="{{route('login')}}" method="post" id="loginform">
        @csrf
        <input type="email" name="email" required placeholder="Email" /><br />
        <input type="password" name="password" required placeholder="password" /><br />
        Remember me<input type="checkbox" name="remember"   /><br />
        <input type="submit" /><br />
        </form>
    </section>
@endsection
