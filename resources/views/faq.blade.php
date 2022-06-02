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
    <p class="heading underline font-x2">FAQ</p>
</div>
<ul class="nospace group overview btmspace-80">
     @can('isAdmin')
      <div align="center"> <a class="btn" name="modifica" href="{{ route('aggiungifaq') }}">aggiungi faq</a></div>
   <br>  @endcan
    
     @foreach ($faqs as $faq)
    <li class="one first" style="background:#F0F2F5; padding: 20px;">
        <article>
            <h6 class="heading" style="color:#B946AD"><b>{{ $faq->domanda }} </b></h6>
            <p>{{ $faq->risposta }}</p>
            @can('isAdmin')
            <!--<script>
            var vis = 1000;    //CONFIRM
window.confirm = function(message) {
  var a = document.createElement('div');
  var y = document.createElement('button');
  var n = document.createElement('button');  
  //regole di stile CSS
  a.style.cssText = "width:30vw; height:100px; border:1px solid #bbb; border-radius:5px; padding:10px; background:white; box-shadow:0px 0px 8px #0006; position:fixed; top:20px; right:0; left:0; margin:auto; font-family: \"Arial\", sans-serif; color:black;z-index:"+ vis+ ";";
  //buttons style
  y.style.cssText = "position:absolute; bottom:0; right:0; width:50%; margin:2px;clear:both;";
  n.style.cssText = "position:absolute; bottom:0; left:0; width:50%; margin:2px;clear:both;";
  a.innerHTML = "<b>Confirm</b><br>"+message;
    y.innerHTML = "Conferma";
    n.innerHTML = "Annulla";
  document.body.appendChild(a);
  a.appendChild(y);
  a.appendChild(n);
    vis--;
  
// case YES  
  y.addEventListener("click", function(e) {
     return true;
  	 a.remove();
  }
)
  //case NO
  n.addEventListener("click", function(e,resp) {
   	event.stopPropagation(); event.preventDefault()	
            a.remove();

  }
)  
};
           </script>-->
           <div align="center"> <a class="btn" name="modifica" href="{{route('modificafaq', ['id' => $faq->id])}}">modifica</a> 
               <a class="btn" name="elimina" href="{{ route('eliminafaq', ['id' => $faq->id]) }}" onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};" >elimina</a></div>
      @endcan
        </article>
    </li>
    <br> 
    @endforeach
    
</ul>

<!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $faqs])
<br> 

@endsection