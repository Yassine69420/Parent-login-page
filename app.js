document.addEventListener("DOMContentLoaded", function () {
  const usernameInput = document.getElementById("cin");
  const usernameLabel = document.getElementById("cinLabel");

  const cinRegex = /^[A-Za-z]{1,2}\d{5,8}$/;
  const isUsernameValid = cinRegex.test(usernameInput.value.trim());

  // Check if the username input is not empty and validate it
  if (usernameInput.value.trim().length > 0) {
    if (!isUsernameValid) {
      // Add error styling to the label and input container
      usernameLabel.classList.add("error");
      usernameInput.parentNode.classList.add("invalid");

      // Display error message below the label
      displayErrorMessage(
        usernameLabel,
        "Le CIN doit commencer par une ou deux lettres suivies de 5 à 8 chiffres."
      );
    }
  }

  function displayErrorMessage(element, message) {
    // Create a div element for the error message
    const errorMessage = document.createElement("div");
    errorMessage.textContent = message;
    errorMessage.classList.add("error-message");

    // Insert the error message after the label element
    element.insertAdjacentElement("afterend", errorMessage);
  }
});
