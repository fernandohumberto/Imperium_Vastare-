        function fetchDollarValue() {
            fetch('https://open.er-api.com/v6/latest/USD')
            .then(response => response.json())
            .then(data => {
                const dollarValue = data.rates.BRL; // Substitua 'BRL' pela moeda desejada, se necessário
                document.getElementById('dollar-value').textContent = dollarValue.toFixed(2);
            })
            .catch(error => {
                console.error('Erro ao buscar o valor do dólar:', error);
            });
        }

        setInterval(fetchDollarValue, 5000);
        fetchDollarValue();