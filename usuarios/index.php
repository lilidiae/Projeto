
 <link rel="stylesheet" href="../css/stylen.css">
<script>
    function certo()
{
alert("Cadastrado com sucesso!!");
}
</script>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../undraw_reminder_re_fe15.svg" alt="">
        </div>
        <div class="form">
            <form action="salvar.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>

            
                    
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmSenha">Confirme sua Senha</label>
                        <input id="confirmSenha" type="password" name="confirmSenha" placeholder="Digite sua senha novamente" required>
                    </div>
                 
                </div>

               

                <div class="continue-button">
                    <button onclick="certo();">Continuar </button>
                    
                </div>
            </form>
        </div>
    </div>
</body>

</form>
