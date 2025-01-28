<h1>Bem-vindo ao Projeto com CodeIgniter 3 e jQuery!</h1>
<button id="botao">Clique em mim</button>
<p id="mensagem" style="display: none;">Olá! Este texto foi exibido com jQuery.</p>

<script>
    $(document).ready(function() {
        $('#botao').click(function() {
            $('#mensagem').toggle();
        });
    });
</script>