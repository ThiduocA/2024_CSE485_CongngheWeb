document.addEventListener("DOMContentLoaded", function() {
    const avatarInput = document.getElementById("avatarInput");
    const avatarImg = document.getElementById("avatarImg");
  
    avatarInput.addEventListener("change", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function() {
          avatarImg.src = reader.result;
        }
        reader.readAsDataURL(file);
      }
    });
  
    const changeAvatarBtn = document.querySelector(".change-avatar-btn");
    changeAvatarBtn.addEventListener("click", function() {
      avatarInput.click();
    });
  });


