function flatList(ulId1, ulId2, ulId3) {
 
  var input, filter, ul1, ul2, li1, li2, a1, a2, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul1 = document.getElementById(ulId1);
  ul2 = document.getElementById(ulId2);
  ul3 = document.getElementById(ulId3);
  li1 = ul1.getElementsByTagName('li');
  li2 = ul2.getElementsByTagName('li');
  li3 = ul3.getElementsByTagName('li');

  for (i = 0; i < li1.length; i++) {
    a1 = li1[i].getElementsByTagName("a")[0];
    txtValue = a1.textContent || a1.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li1[i].style.display = "";
    } else {
      li1[i].style.display = "none";
    }
  }

  for (i = 0; i < li2.length; i++) {
    a2 = li2[i].getElementsByTagName("a")[0];
    txtValue = a2.textContent || a2.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li2[i].style.display = "";
    } else {
      li2[i].style.display = "none";
    }
  }

  for (i = 0; i < li3.length; i++) {
    a3 = li3[i].getElementsByTagName("a")[0];
    txtValue = a3.textContent || a3.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li3[i].style.display = "";
    } else {
      li3[i].style.display = "none";
    }
  }
}
