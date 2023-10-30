<script>
    $(document).ready(() => {
        $('#sesion').click(() => {
            let email = $('#email').val();
            let pass = $('#password').val();

            if (email === "") {
                Swal.fire({
                    icon: 'error',
                    text: 'Correo vacio'
                });
                return false;
            } else {
                let regexpEmail = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}/;

                if (!regexpEmail.test(email)) {
                    Swal.fire({
                        icon: 'error',
                        text: 'Correo invalido'
                    });
                    return false;
                } else {
                    email = $('#email').val();
                }
            }
            if (pass === "") {
                Swal.fire({
                    icon: 'error',
                    text: 'Contraseña vacia'
                });
                return false;
            } else {
                let regexpPassword = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}/;

                if (regexpPassword.test(pass)) {
                    Swal.fire({
                        icon: 'error',
                        text: 'Contraseña invalida'
                    });
                    return false;
                } else {
                    pass = $('#password').val();
                }
            }

            $.ajax({
                url: "./app/model/process/session.process.php",
                data: {
                    email,
                    pass
                },
                type: "POST",

                success: (res) => {
                    if (res == 1) {
                        Swal.fire({
                            text: 'Iniciando Sesion',
                            imageUrl: './public/img/MagoTiempo.png',
                            imageHeigth: 200,
                            imageWidth: 200,
                            backdrop: `rgb(0,0,0, 0.5) 
                            url("./public/img/ArticulosMilenio.png")`,
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2000,
                            background: "#faf0ca"
                        }).then(result => {
                            location = "./inicio"
                        })
                    } else {
                        Swal.fire({
                            text: 'Usuario no encontrado',
                            icon: 'error',
                            showConfirmButton: 'ok',  
                        });
                    }
                },
                error: () => {
                    //console.log("error")
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        text: 'Contacta con el administrador',
                        timer: 1500
                    });
                }
            })
        })
    })
</script>