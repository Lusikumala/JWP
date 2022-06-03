<!DOCTYPE html>
<html lang="en">
<head>
<title>Mengambil data dari array</title>
</head>

<body>
    <script>
    //membuat array
    var products = ["Senter", "Radio", "Antena", "Obeng"];

    //memanggil radio
    // document.write(products[1]);

    document.write("<h3>Daftar Produk:</h3>");
    document.write("<ol>");
    //menggunakan perulangan untuk mencetak semua isi array
    for(let i=0; i < products.length; i++){
        document.write(`<li>$(products{i} )</li>`);
    }
    document.write("</ol>");

</script>
    </body>
    </html>