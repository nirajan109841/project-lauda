// Select elements
const loginText = document.querySelector(".title-text .login");
const signupText = document.querySelector(".title-text .signup");
const loginForm = document.querySelector("form.login");
const signupForm = document.querySelector("form.signup");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector(".signup-link a");

// Toggle to Signup Form
signupBtn.onclick = () => {
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
};

// Toggle to Login Form
loginBtn.onclick = () => {
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
};

// Navigate to Signup via "Signup now" link
signupLink.onclick = (e) => {
  e.preventDefault(); // Prevent default link behavior
  signupBtn.click(); // Simulate clicking the signup button
};

// Validate Signup Form (Optional - Basic Frontend Validation)
signupForm.onsubmit = (e) => {
  const password = signupForm.querySelector('input[placeholder="Password"]').value;
  const confirmPassword = signupForm.querySelector('input[placeholder="Confirm Password"]').value;

  if (password !== confirmPassword) {
    e.preventDefault(); // Prevent form submission
    alert("Passwords do not match!");
  }
};
