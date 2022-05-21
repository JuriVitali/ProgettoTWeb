@extends('layouts.servizio')

@section('title', 'Chi Siamo')

@section('menu')
<article>
    <h3 class="heading"> Chi Siamo</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">Chi siamo</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Chi siamo</p>
</div>

<ul class="nospace group overview btmspace-80">
    <li class="one_half first">
        <article>
            <div class="clear">
                <h6 class="heading"></h6>
            </div>
            <p>TrovAffitto è il sito per gli universitari che cercano una casa in affitto. 
                Nato nel 2022 da un’idea di 4 studenti universitari, come sito che mettere in contatto 
                chi affitta con chi cerca casa.</p>

            <p>TrovAffitto aiuta le persone a trovare la casa giusta quando vogliono, dal loro computer.
                TrovAffitto mette a disposizione di chi cerca casa un’offerta vastissima di case in affitto
                in tutta Italia, di due i tipi, come appartamenti o come posto letto. 
                Grazie al sito troverete le case che meglio rispondono alle vostre esigenze nel modo più semplice possibile.</p>


            <p>Su TrovAffitto puoi ricercare fra tanti annunci immobiliari per affittare 
                casa o pubblicare un annuncio.
            </p>
        </article>
    </li>
    <li class="one_half">
        <img src="images/background/chi-siamo-about-us (1).jpg" alt="">
    </li>
</ul>
@endsection


@section('founders')
<div class="wrapper row2">
    <div class="hoc container clear"> 
        <div class="sectiontitle">
            <p class="heading underline font-x2">Founders</p>
        </div>
        <ul class="nospace group team">
            <li class="one_quarter first">
                <figure><a class="imgover" href="#"><img src="../images/avatars/male_004.png" alt=""></a>
                    <figcaption><strong>Juri</strong> <em>Studente</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a class="imgover" href="#"><img src="../images/avatars/man-avatar-76.png" alt=""></a>
                    <figcaption><strong>Seba</strong> <em>Studente</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a class="imgover" href="#"><img src="../images/avatars/man-avatar-12.png" alt=""></a>
                    <figcaption><strong>Palla</strong> <em>Studente</em></figcaption>
                </figure>
            </li>
            <li class="one_quarter">
                <figure><a class="imgover" href="#"><img src="../images/avatars/man-avatar-2.png" alt=""></a>
                    <figcaption><strong>Yassir</strong> <em>Studente</em></figcaption>
                </figure>
            </li>
        </ul>
    </div>
</div>
@endsection