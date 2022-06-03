<!DOCTYPE html>
<html lang="en">
<head>
<title>Percabangan if/else</title>
</head>

<body>
<script>
    var nilai = prompt("inputkan nilai akhir:");
    var grade = "";

    if(nilai >=90) grade="A"
    else if(nilai >=80) grade ="B"
    else if(nilai >=70) grade ="C"
    else if(nilai >=60) grade ="C"
    else if(nilai >=50) grade ="C"
    else if(nilai >=40) grade ="D"
    else if(nilai >=30) grade ="E"
    else grade ="F";

    document.write(`<p>Grade anda: ${grade}</p>`);
</script>

<!-- Penggabungan dengan perulangan for-->
<script> 
for(let i = 0; i < 10; i++){
    document.write("<p>perulangan ke-" + i + "</p>");
}
</script>

<!-- Penggabungan hitung mundur -->
<script>
for(counter =10; counter> 0; counter--){
    document.write("<p>Perulangan ke "+counter+"</p>");
}

</script>
</body>
<html