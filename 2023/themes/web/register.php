<?php
 $this->layout("_theme");
?>
<form id="form-register">
    <h3> Cadastro de Usuário </h3>
    <div>
        Nome: <input type="text" name="name">
    </div>
    <div>
        Email: <input type="text" name="email">
    </div>
    <div>
        Password: <input type="text" name="password">
    </div>
    <div>
    </div>
    <div>
        <button class="btn">Salvar</button>
    </div>
    <div id="message" class="message" style="display: none">
        <!-- Mensagens de retorno para o usuário -->
    </div>
</form>
<script type="text/javascript" async>
    const form = document.querySelector("#form-register");
    const message = document.querySelector("#message");
    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        const dataUser = new FormData(form);
        const data = await fetch("<?= url("registro"); ?>", {
            method : "POST",
            body : dataUser
        });
        const user = await data.json();
        console.log(user);
        message.setAttribute("style","display");
        message.classList.remove("success", "warning");
        message.classList.add(user.typeMessage);
        message.textContent = user.message;
        setTimeout(() => {
            message.setAttribute("style","display: none");
        },3000);
    });
</script>
