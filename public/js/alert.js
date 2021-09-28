const alert = document.querySelector(".alert");
const alertChild = document.querySelector(".alertChild");

setTimeout(() => {
    alert.removeChild(alertChild);
}, 5000);
