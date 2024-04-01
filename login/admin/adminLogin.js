const validator = new JustValidate("#form");
validator
  .addField("#name", [
    {
      rule: "required",
      errorMessage: "Please enter your email",
    },
  ])
  .addField("#password", [
    {
      rule: "required",
      errorMessage: "Please enter your password",
    },
  ])
  .onSuccess((e) => {
    console.log("clicked");
    const ref = document.getElementById("form");
    ref.submit();
  });
