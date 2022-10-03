// Step 1 - Get the task from input field
const form = document.getElementById("taskform");
form.addEventListener("submit", e => {
  let value = document.getElementById("task").value;
  if (value.length == 0) {
    alert("Please enter a task");
    e.preventDefault();
  }
});
