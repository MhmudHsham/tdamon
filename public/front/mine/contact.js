tjq(document).ready(function () {
    tjq("#contact_form").submit(function () {
        flag = true;
        tjq(".required_field").each(function () {
            var tjqthis = tjq(this);
            if (tjqthis.val() == "") {
                flag = false;
                tjqthis.css("border", "1px solid red");
                tjqthis.closest(".form-group").find(".input-group-addon").css("color", "red").css("border", "1px solid red");
                setTimeout(function () {
                    tjqthis.css("border", "");
                    tjqthis.closest(".form-group").find(".input-group-addon").css("color", "").css("border", "");
                }, 1000);
            }
        });
        var email_value = tjq("input[name='email']").val();
        alert(validateEmail(email_value));
        if (!validateEmail(email_value)) {
            flag = false;
            tjq("input[name='email']").css("border", "1px solid red");
            tjq("input[name='email']").closest(".form-group").find(".input-group-addon").css("color", "red").css("border", "1px solid red");
            setTimeout(function () {
                tjq("input[name='email']").css("border", "");
                tjq("input[name='email']").closest(".form-group").find(".input-group-addon").css("color", "").css("border", "");
            }, 1000);
        }

        if (flag) {
            var url = config.base_url + "/contact/send";
            var formData = tjq("#contact_form").serialize();
            tjq.ajax({
                url: url,
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': tjq('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                success: function (msg) {
                    console.log(msg);
//                    var result = JSON.parse(msg);
//                    if (result.type == "success") {
//                        tjq("input[name='email']").val("");
//                        tjq("input[name='name']").val("");
//                        tjq("textarea").val("");
//                    }
                }
            });
            return false;
        }
        return false;
    });
});
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
