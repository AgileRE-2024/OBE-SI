// const verbsPerLevel is now defined in the Blade template

function updateInput(input) {
    input.value = input.value.toUpperCase().replace(/[^A-Z0-9-]/g, "");
}

function toggleDescription() {
    const dropdown = document.getElementById("levelCPL");
    const description = document.getElementById("deskripsiCPL");
    const submitButton = document.getElementById("submitButton");

    if (dropdown.value) {
        description.disabled = false;
        submitButton.disabled = false;
    } else {
        description.disabled = true;
        submitButton.disabled = true;
    }
}

document
    .getElementById("levelCPL")
    .addEventListener("change", validateDescription);
document
    .getElementById("deskripsiCPL")
    .addEventListener("input", validateDescription);

function validateDescription() {
    const level = document.getElementById("levelCPL").value;
    const description = document
        .getElementById("deskripsiCPL")
        .value.toLowerCase();
    const submitButton = document.getElementById("submitButton");
    const errorText = document.getElementById("errorText");

    if (!level) return;

    const validVerbs = verbsPerLevel[level] || [];
    const hasValidVerb = validVerbs.some((verb) =>
        description.includes(verb.toLowerCase()),
    );

    if (hasValidVerb) {
        errorText.style.display = "none";
        submitButton.disabled = false;
    } else {
        errorText.style.display = "block";
        submitButton.disabled = true;
    }
}
