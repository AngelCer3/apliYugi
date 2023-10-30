<script>
    $(document).ready(() => {
        $('#crear').click(() => {
            let nombre = $('#nombre').val();
            let apePaterno = $('#apePaterno').val();
            let apeMaterno = $('#apeMaterno').val();
            let email = $('#email').val();
            let pass = $('#password').val();

            if (nombre === "") {
                Swal.fire({
                    icon: 'error',
                    text: "campo vacio"
                });
                return false;

            } else {
                let regexpNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

                if (!regexpNombre.test(nombre)) {
                    Swal.fire({
                        icon: 'error',
                        text: 'Tipo de dato no permitido solo letras'
                    })
                    return false;
                } else {
                    nombre = $('#nombre').val();
                }
            }
            if (apePaterno === "") {
                Swal.fire({
                    icon: 'error',
                    text: "Apellido paterno vacio"
                });
                return false;
            } else {
                let regexpApePaterno = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

                if (!regexpApePaterno.test(apePaterno)) {
                    Swal.fire({
                        icon: 'error',
                        text: 'Tipo de dato no permitido solo letras'
                    });
                    return false;
                } else {
                    apePaterno = $('#apePaterno').val();
                }
            }
            if (apeMaterno === "") {
                Swal.fire({
                    icon: 'error',
                    text: "Apellido materno vacio"
                });
                return false;
            } else {
                let regexpApeMaterno = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

                if (!regexpApeMaterno.test(apeMaterno)) {
                    Swal.fire({
                        icon: 'error',
                        text: 'Tipo de dato no permitido solo letras'
                    });
                    return false;
                } else {
                    apeMaterno = $('#apeMaterno').val();
                }
            }
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
                url: "./app/model/process/registre.process.php",
                data: {
                    nombre,
                    apePaterno,
                    apeMaterno,
                    email,
                    pass
                },
                type: "POST",

                success: () => {
                    Swal.fire({
                        title: 'Usuario Registrado',
                        text: "Usuario dado de alta con exito",
                        imageUrl: './public/img/MagoTiempo.png',
                        imageHeigth: 200,
                        imageWidth: 200,
                        backdrop: `rgb(0,0,0, 0.5) 
                            url("./public/img/ArticulosMilenio.png")`,
                        timer: 2000,
                        showCancelButton: false,
                        showConfirmButton: false,
                        background: "#faf0ca"
                    }).then((result) => {
                        window.location = "./home"
                    })
                },
                error: () => {
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