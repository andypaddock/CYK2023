const trackedElement = document.getElementById("trackedElement");
const imageWrap = trackedElement.querySelector(".image-wrap");
const distanceBottomDisplay = document.getElementById("distanceBottom");
const distanceLeftDisplay = document.getElementById("distanceLeft");

// If you want to track the mouse position within the .image-wrap element specifically:
imageWrap.addEventListener("mousemove", (event) => {
  const imageWrapBoundingBox = imageWrap.getBoundingClientRect();
  const distanceBottom = Math.round(
    ((imageWrapBoundingBox.bottom - event.clientY) /
      imageWrapBoundingBox.height) *
      100
  );
  const distanceLeft = Math.round(
    ((event.clientX - imageWrapBoundingBox.left) / imageWrapBoundingBox.width) *
      100
  );

  // Update the display with the calculated distances as percentages
  distanceBottomDisplay.textContent = `Distance from bottom: ${distanceBottom}%`;
  distanceLeftDisplay.textContent = `Distance from left: ${distanceLeft}%`;
});
