
<div class="panel panel-primary chat chat_window">
        <div class="panel-heading">
        <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="box-chat">
            <div class="user">
                <span class="message">alo</span>
                <br>
                <span class="author-message"><b>Manager</b></span>
            </div>
        </div>
        <div class="panel-footer clearfix">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control message-content" placeholder="Type your message">
                    <input type="hidden" class="room-id" value="1">
                    <input type="hidden" class="user-id" value="">
                        <div class="input-group-addon">
                        <a href="#" id="interview-message-send" data-url="#">
                            Send Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<style type="text/css">
  .chat_window{
    width: 60%;
    float: right;
  }
</style>

<script type="text/javascript">


$(document).ready(function() {
    var boxChat = $('.box-chat');
    boxChat[0].scrollTop = boxChat[0].scrollHeight;

    $('#interview-message-send').click(function(event) {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        var msgContent = $('.message-content').val();
        $.post('chat',
            {
                msgContent: msgContent
            },
            function(data) {

        });
    });
});
</script>