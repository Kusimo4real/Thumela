document.addEventListener("DOMContentLoaded", () => {
  // Validate Sign-Up Form
  const signupForm = document.getElementById("signup-form");
  if (signupForm) {
    signupForm.addEventListener("submit", (e) => {
      const password = signupForm.querySelector("input[name='password']").value;
      const confirmPassword = signupForm.querySelector(
        "input[name='confirm_password']"
      ).value;

      if (password !== confirmPassword) {
        e.preventDefault();
        alert("Passwords do not match. Please try again.");
      }
    });
  }

  // Display Confirmation on Logout
  const logoutButton = document.querySelector("button[name='logout']");
  if (logoutButton) {
    logoutButton.addEventListener("click", (e) => {
      const confirmLogout = confirm("Are you sure you want to log out?");
      if (!confirmLogout) {
        e.preventDefault();
      }
    });
  }

  // Highlight Active Links
  const navLinks = document.querySelectorAll("nav a");
  if (navLinks) {
    const currentPath = window.location.pathname;
    navLinks.forEach((link) => {
      if (link.href.includes(currentPath)) {
        link.classList.add("active");
      }
    });
  }

  // Display Uploaded Profile Picture
  const profilePicture = document.querySelector(".profile-picture img");
  if (profilePicture) {
    const defaultPicture = "uploaded_picture.png";
    const userUploadedPicture = profilePicture.getAttribute("src");

    if (!userUploadedPicture || userUploadedPicture === "") {
      profilePicture.setAttribute("src", defaultPicture);
    }
  }
});
