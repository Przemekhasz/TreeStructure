$(".delete").on("click", function (event) {
    event.preventDefault();
    const url = "/tree/" + $(this).data("id");
    swal({
        title: "Na pewno?",
        text: "Jeśli usuniesz ten element nie będzie możliwości przywrócenia!",
        icon: "warning",
        buttons: ["Nie", "Tak!"],
    }).then(function (value) {
        if (value) {
            window.location.href = url;
        }
    });
});
