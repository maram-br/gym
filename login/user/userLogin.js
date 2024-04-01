const validator = new JustValidate(".js-form");
validator
  .addField("#email", [
    {
      rule: "required",
      errorMessage: "Please enter your email",
    },
    {
      rule: "email",
      errorMessage: "Please enter a valid email",
    },
  ])
  .addField("#password", [
    {
      rule: "required",
      errorMessage: "Please enter your password",
    },
  ])
  .addField("#remember", [
    {
      rule: "required",
      errorMessage: "Please check this box if you want to proceed",
    },
  ])
  .onSuccess((e) => {
    document.querySelector(".js-form").submit();
  });
