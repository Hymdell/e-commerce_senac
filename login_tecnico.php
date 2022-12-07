<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Responsive Login and Signup Form </title>-->

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>TECHARE Login</title>
</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header><a href="escolha.php"><img src="assets/images/arrow-left-circle.svg" width="30"  alt=""></a> Login Técnico</header>
                <form action="login_verifica.php" method="POST">
                    <div class="field input-field">
                        <input type="text" pattern="[^ @]*@[^ @]*" placeholder="Email" class="input" name="email" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,20}$" placeholder="Senha" class="password" name="senha" required>
                        <i class='bx bx-hide eye-icon'></i>
                        <input type="hidden" name="tabela" value="tecnicos">
                    </div>

                    <div class="field button-field">
                        <button><input type="submit" value="Entrar"></button>
                    </div>
                </form>
            </div>
            <div class="line"></div>
        </div>

    </section>
    <script>
        const forms = document.querySelector(".forms"),
        pwShowHide = document.querySelectorAll(".eye-icon"),
        links = document.querySelectorAll(".link");
        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
                pwFields.forEach(password => {
                    if (password.type === "password") {
                        password.type = "text";
                        eyeIcon.classList.replace("bx-hide", "bx-show");
                        return;
                    }
                    password.type = "password";
                    eyeIcon.classList.replace("bx-show", "bx-hide");
                })
            })
        })
        links.forEach(link => {
            link.addEventListener("click", e => {
                e.preventDefault(); //preventing form submit
                forms.classList.toggle("show-signup");
            })
        })
    </script>
</body>
</html>