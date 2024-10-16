<script>
    $(document).ready(function(){
        $('#login').validate({
            rules: {
                email: {
                    required: true,
                },
                password: {
                    required: true
                }
            },
            errorPlacement: function(error, element) {
                error.appendTo(element.parent().parent());
            },
            errorClass: 'text-danger'
        });

        $('#register').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email:true
                },
                password:{
                    required:true,
                },
                confirm_password:{
                    required:true,
                    equalTo:"input[name='password']"
                }
            },
            errorPlacement: function(error, element) {
                error.appendTo(element.parent().parent());
            },
            errorClass: 'text-danger'
        });
    });
</script>
