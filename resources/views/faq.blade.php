@extends('layouts.servpubbl')

@section('title', 'Faq')

@section('menu')
<article>
    <h3 class="heading"> Chi Siamo</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">Faq</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">FAQ</p>
</div>
<ul class="nospace group overview btmspace-80">
    
    
    @foreach ($faqs as $faq)
    <li class="one first" style="background:#F0F2F5; padding: 20px;">
        <article>
            <h6 class="heading" style="color:#B946AD"><b>{{ $faq->domanda }} </b></h6>
            <p>{{ $faq->risposta }}</p>
        </article>
    </li>
    <br> 
    @endforeach
    
</ul>

<!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $faqs])
<br> 

@endsection