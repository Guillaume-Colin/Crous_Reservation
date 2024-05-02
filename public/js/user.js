document.addEventListener("DOMContentLoaded", function() {
  var buttons = document.querySelectorAll(".button-container > div");
  var forms = document.querySelectorAll(".form-container");

  buttons.forEach(function(button) {
      button.addEventListener("click", function(event) {
          var formId = event.target.getAttribute("data-form");
          forms.forEach(function(form) {
              if (form.id === formId) {
                  form.style.display = "block";
              } else {
                  form.style.display = "none";
              }
          });
      });
  });
});