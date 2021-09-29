$(".edit").on("click", function (event) {
    event.preventDefault();
    const url = "/tree";
    swal({
        title: "Na pewno?",
        text: "Chcesz edytować ten element?",
        icon: "warning",
        buttons: ["Nie", "Tak!"],
    }).then(function (value) {
        if (value) {
            window.location.href = url;
        }
    });
});
