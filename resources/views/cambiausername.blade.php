@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function getErrorHtml(elemErrors) {
    if ((typeof (elemErrors) === 'undefined') || (elemErrors.length < 1))
        return;
    var out = '<ul class="errors">';
    for (var i = 0; i < elemErrors.length; i++) {
        out += '<li>' + elemErrors[i] + '</li>';
    }
    out += '</ul>';
    return out;
}
</script>
<script>
function doElemValidation(id, actionUrl, formId) {
    console.log('your message');

    var formElems;

    function addFormToken() {
        var tokenVal = $("#" + formId + " input[name=_token]").val();
        formElems.append('_token', tokenVal);
    }

    function sendAjaxReq() {
        $.ajax({
            type: 'POST',
            url: actionUrl,
            data: formElems,
            dataType: "json",
            error: function (data) {
                if (data.status === 422) {
                    var errMsgs = JSON.parse(data.responseText);
                    console.log('your message2');
                    $("#" + id).after(getErrorHtml(errMsgs[id]));
                }
            },
            contentType: false,
            processData: false
        });
    }
    
    $("#" + id).parent().find('.errors').html(' ');
    var elem = $("#" + formId + " :input[name=" + id + "]");
    inputVal = elem.val();
    formElems = new FormData();
    formElems.append(id, inputVal);
    addFormToken();
    sendAjaxReq();

}
</script>
<script>
function doFormValidation(actionUrl, formId) {

    var form = new FormData(document.getElementById(formId));
    $.ajax({
        type: 'POST',
        url: actionUrl,
        data: form,
        dataType: "json",
        error: function (data) {
            if (data.status === 422) {
                var errMsgs = JSON.parse(data.responseText);
                $.each(errMsgs, function (id) {
                    $("#" + id).parent().find('.errors').html(' ');
                    $("#" + id).after(getErrorHtml(errMsgs[id]));
                });
            }
        },
        success: function (data) {
            window.location.replace(data.redirect);
        },
        contentType: false,
        processData: false
    });
}
</script>
<script>
$(function () {
    var actionUrl = "{{ route('validateusername') }}";
    var actionUrl2 = "{{ route('usernameupdate') }}";
    var formId = 'form';
    console.log("qui0");
    $(":input").on('blur', function (event) {
        console.log("qui1");
        var formElementId = $(this).attr('id');
        console.log("qui2");
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#form").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl2, formId);
    });
});
</script>
@endsection

@section('menu')
<article>
    <h3 class="heading">Cambia Username</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('profilo') }}">profilo</a></li>
    <li><a href="#">Cambia Password</a></li>
</ul>
@endsection

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; " >
    <h3><b><center>Cambia Username</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            
              {{ Form::open(array('route' => ['usernameupdate','validateusername'], 'id'=>'form')) }} 
            
             <div  class="wrap-input" align="center">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', $user->username, ['class' => 'input','id' => 'username']) }}
                
            </div>

            <div class="container-form-btn" align="center">   
                
                {{ Form::submit('Modifica', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
           
        </div>
    </div>

</div>

<br><br>
@endsection
