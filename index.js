/** @format */

function produk() {
  var minuman = document.getElementById('minuman').value;
  var makanan = document.getElementById('makanan').value;

  var jumHarMak = makanan * parseInt(document.getElementById('jumlah_makanan').value);
  var jumHarMin = minuman * parseInt(document.getElementById('jumlah_minum').value);

  document.getElementById('harga_makan').value = jumHarMak;
  document.getElementById('harga_minum').value = jumHarMin;
}

var btn = document.querySelector('#btn a');
btn.addEventListener('click', function () {
  var jumMakan = parseInt(document.querySelector('#jumlah_makanan').value);
  var jumMinum = parseInt(document.querySelector('#jumlah_minum').value);
  var hargaMinum = parseInt(document.querySelector('#harga_minum').value);
  var hargaMakan = parseInt(document.querySelector('#harga_makan').value);

  var tb = document.querySelector('tbody');
  var trBaru = document.createElement('tr');
  var tdB1 = document.createElement('td');
  var tdB2 = document.createElement('td');
  var tdB3 = document.createElement('td');
  var tdB4 = document.createElement('td');

  var textJ = document.createTextNode(jumMakan + jumMinum);
  var inputH = document.createElement('input');
  var valMakanan = document.createElement('input');
  var valMinum = document.createElement('input');
  tb.appendChild(trBaru);
  trBaru.appendChild(tdB1);
  trBaru.appendChild(tdB2);
  trBaru.appendChild(tdB3);
  trBaru.appendChild(tdB4);
  tdB1.appendChild(valMakanan);
  tdB2.appendChild(valMinum);
  tdB3.appendChild(textJ);
  tdB4.appendChild(inputH);

  valMakanan.setAttribute('id', 'makanTxtInput');
  valMakanan.setAttribute('id', 'makanTxtInput');

  var makanVal = document.getElementById('makanan');
  var minumVal = document.getElementById('minuman');

  var tampilkanFood = makanVal.options[makanVal.selectedIndex].text;
  var tampilkanMinum = minumVal.options[minumVal.selectedIndex].text;

  valMakanan.setAttribute('value', tampilkanFood);
  valMinum.setAttribute('value', tampilkanMinum);

  var dataVal = parseInt(hargaMinum) + parseInt(hargaMakan);

  inputH.setAttribute('type', 'text');
  inputH.setAttribute('value', `${dataVal}`);
  inputH.setAttribute('id', 'hargaTotal');

  var total = parseInt(document.getElementById('hargaTotal').value);

  // var valTotalHar = total * dataVal;
  // if

  // document.querySelector('#hargaT').innerHTML = 'Rp. ' + total;

  // var ntTabel = document.querySelector('.container-nota');
  // ntTabel.style.display = 'block';
});
