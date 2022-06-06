@extends('layouts.servpubbl')

@section('title', 'Faq')

@section('menu')
<article>
    <h3 class="heading"> FAQ</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">Faq</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">FAQs</p>
</div>

@can('isAdmin')
    <div class="one first btmspace-20" style="height: 70px;">
        <a class="btn-faq-a heading"  href="{{ route('aggiungifaq') }}">aggiungi faq</a>
    </div>
@endcan

<ul class="nospace group overview btmspace-80">
    
    @foreach ($faqs as $faq)
    <li class="one" style="border-radius: 10px;">
            
            @can('isAdmin')
            <div style='background-color: #D13AC1; color:#FFF; border-radius: 5px 5px 0px 0px; margin-bottom: 0px; padding: 10px 20px 10px 20px; vertical-align: middle;'>                
                <h6 class="heading faq-ques-1" style="width: 77%; float: left; font-size: 1.3rem; padding: 7px;"><b>{{ $faq->domanda }} </b></h6>             
                    <a class="btn-faq-m" name="modifica" href="{{route('modificafaq', ['id' => $faq->id])}}">modifica</a> 
                    <a class="btn-faq-d" name="elimina" href="{{ route('eliminafaq', ['id' => $faq->id]) }}" onclick="if (confirm('Sei sicuro di voler eliminare la domanda selezionata?')){return true;}else{event.stopPropagation(); event.preventDefault();};" >elimina</a>       
            </div>
            @endcan
        
            @cannot('isAdmin')
            <h6 class="heading faq-ques-2" style="width: 100%; padding:10px 20px; font-size: 1.3rem; background-color: #D13AC1; color:#FFF; border-radius: 5px 5px 0px 0px; margin-bottom: 0px; vertical-align: middle;"><b>{{ $faq->domanda }} </b></h6>  
            @endcannot
            
            <p class="inspace-20 faq-ans" >{{ $faq->risposta }}</p>
            
    </li>
    <br> 
    @endforeach
    
</ul>

<!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $faqs])
<br> 

@endsection