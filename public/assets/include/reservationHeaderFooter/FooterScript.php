<?php include("assets/include/partials/Footer.php") ?>

<script>
    $(".inc").click(function() {
        updateValue(this, 1);
    });
    $(".dec").click(function() {
        updateValue(this, -1);
    });

    function updateValue(obj, delta) {
        var item = $(obj).parent().find("input");
        var newValue = parseInt(item.val(), 10) + delta;
        item.val(Math.max(newValue, 0));
    };
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
</body>

</html>