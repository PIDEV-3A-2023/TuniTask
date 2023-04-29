const takePictureButton = document.getElementById("take-picture-btn");
const videoElement = document.getElementById("video-preview");

const take = document.getElementById("take-picture");

const capturedImageElement = document.getElementById("captured-image");
var stream = "";
// Get user media (i.e. access to camera)
takePictureButton.addEventListener("click", () => {
  navigator.mediaDevices
    .getUserMedia({ video: true })
    .then((s) => {
      stream = s;
      // Attach the video stream to the video element
      videoElement.srcObject = stream;
      videoElement.play();
    })
    .catch((error) => {
      console.error(`Error accessing camera: ${error}`);
    });
  takePictureButton.style.display = "none";
  take.style.display = "block";
  capturedImageElement.style.display = "none";
  videoElement.style.display = "block";
});
// When the button is clicked, capture the image data and display it in the image element
take.addEventListener("click", () => {
  const canvasContext = document.createElement("canvas").getContext("2d");
  canvasContext.canvas.width = videoElement.videoWidth;
  canvasContext.canvas.height = videoElement.videoHeight;
  canvasContext.drawImage(
    videoElement,
    0,
    0,
    canvasContext.canvas.width,
    canvasContext.canvas.height
  );

  const imageData = canvasContext.canvas.toDataURL("image/png");
  capturedImageElement.src = canvasContext.canvas.toDataURL();
  videoElement.style.display = "none";
  takePictureButton.style.display = "block";
  take.style.display = "none";
  capturedImageElement.style.display = "block";

  if (stream) {
    stream.getTracks().forEach((track) => track.stop());
    stream = null;
  }
  $.ajax({
    url: "http://127.0.0.1:8000/api/images",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      image: imageData,
    }),
    success: function () {
      console.log("Image sent successfully");
    },
    error: function () {
      console.error("Error sending image");
    },
  });
});
