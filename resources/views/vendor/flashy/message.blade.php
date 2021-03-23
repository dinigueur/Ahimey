<style>
.flashy {
    font-family: Arial, sans-serif;
    padding: 11px 30px;
    border-radius: 4px;
    font-weight: 400;
    position: fixed;
    bottom: 20px;
    right: 20px;
    font-size: 16px;
    color: #fff;
}

.flashy--success {
    background-image: linear-gradient(
        30deg, #28c76f, rgba(40, 199, 111, 0.5));
    color: #fff;
}

.flashy--warning {
    
    background: #fafafa;
    color: #fff;
    background-image: linear-gradient(
        30deg, #ff9f43, rgba(255, 159, 67, 0.5));
    background-repeat: repeat-x;
}

.flashy--muted {
    background: #eee;
    color: #3a3a3a;
    border: 1px solid #e2e2e2;
}

.flashy--muted-dark {
    background: #133259;
    color: #e2e1e7;
}

.flashy--info a,
.flashy--primary-dark a {
    color: #fff;
}

.flashy--error {

    background: #640064;
    color: #fff;
    background-image: linear-gradient(
        30deg, #ea5455, rgba(234, 84, 85, 0.5));
    background-repeat: repeat-x;

    /*background: #d14130;
    color: #fff;*/
}

.flashy--primary {
    
    background: #640064;
    color: #fff;
    background-image: linear-gradient(
        30deg, #7367f0, rgba(115, 103, 240, 0.5));
    background-repeat: repeat-x;

}

.flashy--primary-dark {
    background: linear-gradient(to right, #133259 30%, #0d233e);
}

.flashy--info {
    
    background: #640064;
    color: #fff;
    background-image: linear-gradient(
        30deg, #00cfe8, rgba(0, 207, 232, 0.5));
    background-repeat: repeat-x;
}

.flashy > ul {
    padding-left: 15px;
}

.flashy > p:only-of-type {
    margin-bottom: 0;
}

.flashy i {
    margin-right: 8px;
    position: relative;
    top: 6px;
}

.flashy .flashy__body {
    color: inherit;
}

@media only screen and (max-width:1050px) {
    .flashy {
        text-align: center;
        right: 0;
        left: 50%;
        width: 300px;
        margin-left: -150px;
    }
}
</style>

<script>
    function flashy(message, link) {
        var template = $($("#flashy-template").html());
        $(".flashy").remove();
        template.find(".flashy__body").html(message).attr("href", link || "#").end()
         .appendTo("body").hide().fadeIn(300).delay(2800).animate({
            marginRight: "-100%"
        }, 300, "swing", function() {
            $(this).remove();
        });
    }
</script>

@if(Session::has('flashy_notification.message'))
<script id="flashy-template" type="text/template">
    <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
        <a href="#" class="flashy__body" target="_blank"></a>
    </div>
</script>

<script>
    flashy("{{ Session::get('flashy_notification.message') }}", "{{ Session::get('flashy_notification.link') }}");
</script>
@endif