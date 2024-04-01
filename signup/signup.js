const validator = new JustValidate("#signup-form");
validator
  .addField("#validationCustom01", [
    {
      rule: "required",
      errorMessage: "Please enter your name",
    },
    {
      validator: (value) => {
        const regex = /^[a-zA-Z][_a-zA-Z0-9-]+$/;
        return regex.test(value);
      },
      errorMessage:
        "Username must start with a letter and contain only letters, numbers, underscores, and hyphens",
    },
    {
      rule: "minLength",
      value: 4,
      errorMessage: "Username must be at least 4 characters long",
    },
    {
      rule: "maxLength",
      value: 20,
      errorMessage: "Username must be at most 20 characters long",
    },
    {
      validator: (v) => () => {
        return fetch("validation.php?toverify=name&value=" + v)
          .then((res) => res.json())
          .then((data) => {
            return data.isAvailable;
          });
      },
      errorMessage: "Name already used",
    },
  ])
  .addField("#validationCustom03", [
    {
      rule: "required",
      errorMessage: "Please enter your password",
    },
    {
      validator: (v) => {
        const regex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
        return regex.test(v);
      },
      errorMessage:
        "Password must contain at least one uppercase letter, one lowercase letter, and one number",
    },
    {
      validator: (v) => {
        return v.length >= 8;
      },
      errorMessage: "Password must be at least 8 characters long",
    },
    {
      validator: (v) => {
        return v.length <= 20;
      },
      errorMessage: "Password must be at most 20 characters long",
    },
  ])
  .addField("#validationCustom05", [
    {
      rule: "required",
      errorMessage: "Please enter your password again",
    },
    {
      validator: (value, fields) => {
        if (
          fields["#validationCustom03"] &&
          fields["#validationCustom05"].elem
        ) {
          const repeatPasswordValue = fields["#validationCustom03"].elem.value;

          return value === repeatPasswordValue;
        }
      },
      errorMessage: "Passwords should be the same",
    },
  ])
  .addField(
    "#validationCustomUsername",
    [
      {
        rule: "required",
        errorMessage: "Please enter your email",
      },
      {
        rule: "email",
        errorMessage: "Please enter a valid email",
      },
      {
        validator: (v) => () => {
          return fetch("validation.php?toverify=email&value=" + v)
            .then((res) => res.json())
            .then((data) => {
              return data.isAvailable;
            });
        },
        errorMessage: "Email already taken",
      },
    ],
    {
      errorsContainer: "#error-email",
    }
  )
  .addField("#invalidCheck", [
    {
      rule: "required",
      errorMessage: "Please agree to the terms and conditions",
    },
  ])
  .addField("#phonenumber", [
    {
      rule: "required",
      errorMessage: "Please enter your Phone Number",
    },
    {
      validator: (v) => {
        return v.length === 8 && !isNaN(v);
      },
      errorMessage: "Phone Number must be a number with 8 characters long",
    },
    {
      validator: (v) => () => {
        return fetch("validation.php?toverify=PHONE_NUMBER&value=" + v)
          .then((res) => res.json())
          .then((data) => {
            return data.isAvailable;
          });
      },
      errorMessage: "Phone Number already used",
    },
  ])

  .onSuccess((e) => {
    document.getElementById("signup-form").submit();
  });
