incrementAndShowValue();

function incrementAndShowValue() {
  var value = getCookie("visitcounter") || 0;
  var newValue = ("00000" + (Number(value) + 1)).slice(-6);
  var container = document.getElementById("counterVisitor");
  String(newValue).split("").forEach(function(item, index) {
    container.children[index].innerHTML = item;
  });
  counter++;
  setCookie("visitcounter", counter);
}