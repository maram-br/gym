var uploadedImages = []; // Array to store the data URLs of the uploaded images

function readURL(input, rowIndex) {
  const files = input.files;
  const tbody = document.querySelector(".container table tbody");
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const reader = new FileReader();

    reader.onload = function (e) {
      // Check if the image's data URL is already in the uploadedImages array
      if (uploadedImages.includes(e.target.result)) {
        // If it is, show an alert and return to cancel the selection
        alert(
          "This image has already been uploaded. Please select a different image."
        );
        return;
      }

      // If it's not, add it to the uploadedImages array
      uploadedImages.push(e.target.result);

      const tbodyRows = tbody.querySelectorAll("tr");
      const imageCell = document.createElement("td");
      const img = document.createElement("img");
      img.src = e.target.result;
      img.alt = "Uploaded Image";
      img.className = "uploaded-image";
      imageCell.appendChild(img);

      tbodyRows[rowIndex].appendChild(imageCell);
    };

    reader.readAsDataURL(file);
  }
}
