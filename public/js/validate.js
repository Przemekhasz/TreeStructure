const createForm = document.querySelector("#createForm");
const editForm = document.querySelector("#editForm");
const edit = editForm.querySelector("input[name=name]");
const create = createForm.querySelector("input[name=name]");
const msg = createForm.querySelector(".message");

let errors = [];

// create validate
create.value.length < 1
    ? errors.push("The name must be at least 1 character.")
    : "";
create.value.length > 25
    ? errors.push(`The name must not be greater than 25 characters.`)
    : "";

!errors.length ? createForm.submit() : "";

// edit validate
edit.value.length < 1
    ? errors.push("The name must be at least 1 character.")
    : "";
edit.value.length > 25
    ? errors.push("The name must not be greater than 25 characters.")
    : "";

!errors.length ? createForm.submit() : "";
