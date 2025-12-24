const fileInput = document.getElementById("cvFile");
const fileLabel = document.querySelector(".file-label");

fileInput.addEventListener("change", function() {
  if (this.files && this.files.length > 0) {
    fileLabel.textContent = this.files[0].name; 
  } else {
    fileLabel.textContent = "Resume Upload"; 
  }
});



const coverInput = document.getElementById("coverFile");
const fileLabelcover = document.querySelector(".file-label-cover");

coverInput.addEventListener("change", function() {
  if (this.files && this.files.length > 0) {
    fileLabelcover.textContent = this.files[0].name; 
  } else {
    fileLabelcover.textContent = "Resume Upload"; 
  }
});