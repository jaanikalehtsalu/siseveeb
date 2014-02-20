<h1> Teretulemast Siseveebi!</h1>
<style>
    h1{
        border-radius: 5px;
        border: 2px solid #6495ED;
        background-color: #BCD2EE;
        height: 50px;
        text-align: center;
        font-family: Garamond, serif;
    }
}
<script type="text/javascript">
    function clickme() {
        $.post("welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>


<p>TheWayOfTheFuture</p>

