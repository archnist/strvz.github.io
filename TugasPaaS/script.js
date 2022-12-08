var karakter;
        var text;
        function onkeyUp() {            
            karakter = document.getElementById('karakter').value;            
            text = karakter            
            document.getElementById('jumlah').innerHTML = text.length;         
        }