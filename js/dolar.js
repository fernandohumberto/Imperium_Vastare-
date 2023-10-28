
const url = 'https://economia.awesomeapi.com.br/json/last/USD-BRL';
fetch(url)
  .then(response => response.json())
  .then(data => {
    const usdToBrl = data.USDBRL.bid;
    const formattedUsdToBrl = parseFloat(usdToBrl).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    document.getElementById('usd-to-brl').textContent = formattedUsdToBrl;
  })
  .catch(error => console.error(error));

  