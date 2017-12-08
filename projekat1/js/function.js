function filterAppointment() {

  var query = 1;
  var from = document.getElementById('period_from').value;
  var table = document.getElementById('app_table');
  table.innerHTML="";
  var tr = document.createElement('tr');

  var td1 = document.createElement('th');
  td1.innerHTML='R.Br.';
  tr.appendChild(td1);
  var td2 = document.createElement('th');
  td2.innerHTML='Datum';
  tr.appendChild(td2);
  var td3 = document.createElement('th');
  td3.innerHTML='Broj osoba';
  tr.appendChild(td3);
  var td4 = document.createElement('th');
  td4.innerHTML='Ime';
  tr.appendChild(td4);
  var td5 = document.createElement('th');
  td5.innerHTML='Prezime';
  tr.appendChild(td5);
  var td6 = document.createElement('th');
  td6.innerHTML='Telefon';
  tr.appendChild(td6);
  var td7 = document.createElement('th');
  td7.innerHTML='Email';
  tr.appendChild(td7);
  var td8 = document.createElement('th');
  td8.innerHTML='Napomena';
  tr.appendChild(td8);

  table.appendChild(tr);

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function()
  {
    if(this.readyState == 4 && this.status == 200) {
      //alert(this.responseText);
      var arr = JSON.parse(this.responseText);
      var counter = 1;
      for(var i=0;i<arr.length; i++) {
        var tr = document.createElement('tr');
        tr.setAttribute('id',arr[i][7]);
        var td = document.createElement('td');
        td.innerHTML=counter;
        tr.appendChild(td);
        for(var j=0;j<7; j++) {
          var td = document.createElement('td');
          td.innerHTML=arr[i][j];
          tr.appendChild(td);
        }
        table.appendChild(tr);
        counter++;
      }
    }
  };
  xmlhttp.open('POST', 'ajax.php', true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send('query='+query+'&from='+from);
}