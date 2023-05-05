@extends('welcome')
<!-- Chatbox -->
<!-- Customized Bootstrap Stylesheet -->

@section('chatbox')

    <img src="{{ asset('public/mp1website/assets/img/nurse.png') }}" alt="" height="100px">
        <label for="msg"><b>Nurse (Online)</b></label>

    <div class="chat-popup" id="myForm">
        <form action="{{ url('/messages') }}" class="form-container" method="post">
            @csrf
            <input type="hidden" name="from_number" value="{{ isset($from_number) ? $from_number : '' }}">
            <textarea placeholder="Type message.." name="message" required></textarea>
            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>

        <div class="chathistory">
            @foreach ($messages as $message)
                <div id="messages">
                    <p>{{ $message->message_text }}</p>
                    <span class="time-right"><small>{{ $message->sent_datetime }}</small></span>
                </div>
            @endforeach
        </div>
        
    </div>
</div>

<script>
    setInterval(function(){
        $.ajax({
            url: '{{ route('messages.index') }}',
            type: 'get',
            success: function(response){
                $('.chathistory').html(response);
            }
        });
    }, 1000);
</script>


@endsection
