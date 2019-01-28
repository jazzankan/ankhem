@extends('layout')

@section('title')
    Registrering - Ankhem
@endsection

@section('content')
    <div class="container">
            <h1 class="title">Registrera dig i Ankhemmet!</h1>
            <form class="control" action="" method="post">
                @csrf
                    <div class="field">
                        <label class="label">Förnamn</label>
                        <div class="control">
                            <input class="input" type="text" name="firstname" autofocus placeholder="Förnamn">
                        </div>
                    </div>
                <div class="field">
                    <label class="label">Efternamn</label>
                    <div class="control">
                        <input class="input" type="text" name="lastname" placeholder="Efternamn">
                    </div>
                </div>
                <div class="field">
                    <label class="label">E-postadress</label>
                    <div class="control has-icons-left">
                            <input class="input" type="email" name="email" placeholder="E-post">
                            <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Lösenord</label>
                    <div class="control has-icons-left">
                        <input class="input" type="password" name="password">
                        <span class="icon is-small is-left">
                      <i class="fas fa-key"></i>
                    </span>
                    </div>
                </div>

                    <div class="field">
                        <div class="control">
                            <label class="checkbox" style="margin-top:30px">
                                <input type="checkbox" name="check" value="agree">
                                Jag medger att mina personuppgifter sparas och hanteras enligt  <a href="#">dessa villkor.</a>
                            </label>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Skicka</button>
                        </div>
                    </div>
                <p>&nbsp;</p>
            </form>
    </div>

@endsection