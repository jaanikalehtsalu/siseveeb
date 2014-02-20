<h1> Tere tulemast Siseveebi!</h1>
<style>
    h1{
        border-radius: 50px;
        border: 2px solid #000000;
        background-color: #b2dba1;
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

