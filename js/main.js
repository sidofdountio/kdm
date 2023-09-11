const initApp = async () => {
  console.log("Logged to KDM...");
  
  var favorite = document.getElementById("like");
  if (favorite) {
    favorite.style.display = "none";
  }
}
document.addEventListener("DOMContentLoaded", initApp);
function toggleFavorite(button, productId) {
  button.classList.toggle('favorite');
  var isFavorite = button.classList.contains('favorite');
  if (isFavorite) {
    button.style.color = "#f44336";
    button.style.transition = "all 0.3s ease";
    console.log( ' marked as favorite ' + productId);
  } else {
    button.style.color = "#333";
    console.log(' removed from favorites');
  }
}