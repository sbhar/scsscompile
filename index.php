<style>
	textarea {
		width:100%;
		height:42%;
	}

</style>
<form method="POST" action="css2scss.php" accept-charset="UTF-8" class="ajax-converter-form">
					<h2>scss</h2>
                    <textarea name="css" rows="10" id="sender">
html {
	height: 100%;
}
body {
	height: 100%;
}
#wrap {
	.col {
		float: left;
		a {
			text-decoration: none;
		}
	}
}

                    </textarea>
					<h2>css</h2>
					<textarea name="receiver" id="receiver" rows="10"></textarea>

                    <input type="submit" value="Convert" class="cform-submit">
                    </form>
<script src="jquery-3.2.1.js"></script>
<script>
$(".ajax-converter-form").submit(function (event) {
        var $form = $(this);
        var actionUrl = $form.attr("action");
        var actionMethod = $form.attr("method");
        var formData = $form.serialize();
		
		//ga('send', 'event', 'converter', 'click', 'css2less');

        $.ajax({
            type: actionMethod,
            url: actionUrl,
            data: formData,
            success: function (data) {
				console.log(data);
                $form.find("textarea#receiver").val(data);
            },
            error: function (xhr, status, error) {
                var response = JSON.parse(xhr.responseText);

               /* bootbox.dialog({title: "Unexpected error", message: response.error.message, buttons: {
                    success: {label: "Ok"}}
                });*/
				console.log(response);
            }
        });
        return false;
    });
</script>