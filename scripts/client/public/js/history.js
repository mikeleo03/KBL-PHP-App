window.onload = function() {
    infoNavbarAdded();
    
    // Get Buy History
    var xhr1 = new XMLHttpRequest();
    xhr1.open('GET', 'http://localhost:8000/api/HistoryController/getBuyHistory', true);
    xhr1.onreadystatechange = function () {
        if (xhr1.readyState == 4) {
            if (xhr1.status == 200) {
                var response = JSON.parse(xhr1.responseText);
                var data = response.data;
                var grid = document.getElementById('buy-history-grid'); 
                data.forEach(item => {
                    var divDate = document.createElement('div');
                    divDate.textContent = item.buydate;
                    divDate.className = 'grid-value';
                    grid.appendChild(divDate);

                    var divTotalPrice = document.createElement('div');
                    divTotalPrice.textContent = item.totalprice.toLocaleString("id-ID", {
                        style: "currency",
                        currency: "IDR",
                    });;
                    divTotalPrice.className = 'grid-value';
                    grid.appendChild(divTotalPrice);
                });
            } else {
                var errorData = JSON.parse(xhr1.responseText);
                alert(errorData.message);
                window.location.href = errorData.location;
            }
        }
    };
    xhr1.send();
    
    // Get Top Up History
    var xhr2 = new XMLHttpRequest();
    xhr2.open('GET', 'http://localhost:8000/api/historycontroller/getTopUpHistory', true);
    xhr2.onreadystatechange = function () {
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            console.log(this.responseText);
            var response = JSON.parse(xhr2.responseText);
            var data = response.data;
            var grid = document.getElementById('topup-history-grid');
            data.forEach(item => {
                var divDate = document.createElement('div');
                divDate.textContent = item.date;
                divDate.className = 'grid-value';
                grid.appendChild(divDate);

                var divNominal = document.createElement('div');
                divNominal.textContent = item.amount.toLocaleString("id-ID", {
                    style: "currency",
                    currency: "IDR",
                });;
                divNominal.className = 'grid-value';
                grid.appendChild(divNominal);
            });
        }
    };
    xhr2.send();
};
