@section('scripts')

@parent

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#message').on('change', function (event) {
            var element = $(this);
            element.removeClass('error');
            if (element.val().length > 10 || element.val().length = 0) {
                element.addClass('error');
            }   
        });
        
        $('form').on('submit', function (event) {
            $('#message').trigger('change');
            if ($('#message').hasClass('error')) {
                return false;
            }
            
        });
    });
</script>
@endsection



<div class="group send-message" style="background-color: #BBB;">
    {{ Form::open(array('route' => array('send_message', $selectedUserId), 'id' => 'send_message', 'class' => 'send-message-form')) }}

    <div   style="width: 85%;">
        {{ Form::textarea('text_mess', '', ['class' => 'message-area', 'id' => 'message', 'placeholder' => 'Scrivi un messaggio']) }}
    </div>

    <div style="display: flex; align-items: center;">
        {{ Form::submit('Invia', ['class' => 'send-btn', 'id' => 'sub-btn']) }}
    </div>

    {{ Form::close() }}    
</div>
