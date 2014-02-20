<h1> Tere tulemast Siseveebi!</h1>
<style>
    h1{
        border-radius: 50px;
        color: #000000;
        border: 2px solid #000000;
        background-color: #dbd63d;
        background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#dbd63d), to(#008800));
        height: 50px;
        width: 720px;
        text-align: center;
        font-family: Arial, serif;
    }
}
<script type="text/javascript">
    function clickme() {
        $.post("welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>

