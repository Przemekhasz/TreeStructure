const createForm = document.querySelector("#createForm");
const editForm = document.querySelector("#editForm");
const edit = editForm.querySelector("input[name=name]");
const create = createForm.querySelector("input[name=name]");
const msg = createForm.querySelector(".message");

let errors = [];

if (create.value.length < 3) {
    errors.push("To short");
}

if (!errors.length) {
    createForm.submit();
} else {
    ("");
}

if (edit.value.length < 3) {
    errors.push("To short");
}

if (!errors.length) {
    createForm.submit();
} else {
    ("");
}
