 $(document).ready(function(){
        $("#button").click(function () {

            function show_all() {
                $.ajax({
                    type: "POST",
                    url: "select.php",
                    data:{action:"showroom"},
                    success: function (data) {
                        $("#id").hide();
                        $("#content").html(data);
                    }
                });
            }

            show_all();
        });
    });