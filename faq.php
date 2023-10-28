<!DOCTYPE html>
<html>
<body>

<h2>Valor Atual da Taxa Selic</h2>

<button onclick="pegarSelic()">Pegar Taxa Selic</button>

<p id="taxaSelic"></p>

<script>
async function pegarSelic() {
    try {
        const response = await fetch('https://api.bcb.gov.br/dados/serie/bcdata.sgs.11/dados?formato=json'); // URL da API do Banco Central do Brasil que fornece a taxa Selic
        const data = await response.json();
        const taxaSelic = data[data.length - 1].valor; // O último objeto no array de dados é o mais recente

        document.getElementById('taxaSelic').innerText = 'Taxa Selic: ' + taxaSelic;
    } catch (error) {
        console.error(error);
        document.getElementById('taxaSelic').innerText = 'Erro ao pegar a taxa Selic';
    }
}
</script>

</body>
</html>
