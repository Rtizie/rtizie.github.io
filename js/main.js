let counter = 0;

incrementAndShowValue();

function incrementAndShowValue() { 
  var container = document.getElementById("counterVisitor");
  container.innerText = counter;
  console.log(counter);
  counter++;
}