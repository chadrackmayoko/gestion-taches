// touchspin with addEventListener
let getInputByClass = document.getElementsByClassName("main-touchspin");
Array.from(getInputByClass).forEach((elem, i) => {
  let inputData = elem.getAttribute("value");

  let isIncrement = elem.parentNode.querySelectorAll(".increment-touchspin");
  let isDecrement = elem.parentNode.querySelectorAll(".decrement-touchspin");
  if (isIncrement) {
    isIncrement[0].addEventListener("click", () => {
      inputData++;
      document.getElementById("inputData1").innerHTML = inputData;
    });
  }
  if (isDecrement) {
    isDecrement[0].addEventListener("click", () => {
      if (inputData > 0) {
        inputData--;
        document.getElementById("inputData1").innerHTML = inputData;
      }
    });
  }
});