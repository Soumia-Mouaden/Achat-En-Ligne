const addProductButton = document.getElementById("addProductBtn");
const addProductModal = document.getElementById("addProductModal");
const closeAddModal = document.getElementById("closeAddModal");
const cancelButton = document.getElementById("cancelButton");

addProductButton.addEventListener("click", () => {
  addProductModal.style.display = "block";
  addProductModal.classList.add("active");
  addProductModal.classList.add("open");
});

closeAddModal.addEventListener("click", () => {
	addProductModal.classList.add("slideIns");
  setTimeout(() => {
    addProductModal.classList.remove("active", "slideIns");
    addProductModal.style.display = "none";
  }, 500); 

});
cancelButton.addEventListener("click", () => {
    addProductModal.classList.add("slideOut");
    setTimeout(() => {
        addProductModal.classList.remove("open", "slideOut");
        addProductModal.style.display = "none";
    }, 500); // Wait for the animation to complete (300ms)
  });

window.addEventListener("click", (event) => {
  if (event.target === addProductModal) {
    addProductModal.classList.remove("open");
    setTimeout(() => {
      addProductModal.classList.remove("active");
      addProductModal.style.display = "none";
    }, 500); 
  }
});