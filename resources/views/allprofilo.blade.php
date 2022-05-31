
@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('menu')
<article>
    <h3 class="heading">Modifica Profilo</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">Modifica Profilo</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Catalogo Inserzioni</p>
</div>
<ul class="nospace group overview btmspace-80">
    
    
    @foreach ($users as $user)
    <li class="one first">
        <section class="group" style="background:#F0F2F5;">
            
            
                
            <!-- Porzione delle info dell'alloggio -->
            </div>
            <div class="">
                <ul class="nospace group inspace-15" style="">
                    <li class="one first ">
                        <article>
                            <h6 class="heading">{{ $user->username }}</h6>
                            <p class="nospace"><b>{{ $user->name }} €/mese</b></p>
                            
                            <br>
                            
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </li>
    <br> 
    @endforeach
    
</ul>
@endsection