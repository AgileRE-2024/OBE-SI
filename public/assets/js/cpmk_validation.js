function onCplSelected(selectElement) {
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    const levelCPL = selectedOption.getAttribute("level-limit");
    const levelCPLName = selectedOption.getAttribute("level-name");
    const cplLevelInput = document.getElementById("cplLevel");
    const levelCPMKDropdown = document.getElementById("levelCPMK"); // Ensure this ID matches the dropdown

    // Update the displayed levelCPL
    cplLevelInput.value = levelCPLName || "";

    // Filter options in levelCPMK dropdown
    const levelCPLValue = parseInt(levelCPL, 10); // Convert to integer
    Array.from(levelCPMKDropdown.options).forEach((option) => {
        const optionValue = parseInt(option.value, 10);
        if (!isNaN(optionValue) && optionValue > levelCPLValue) {
            option.style.display = "none"; // Hide options with higher IDs
        } else {
            option.style.display = "block"; // Show valid options
        }
    });

    levelCPMKDropdown.disabled = false; // Enable the dropdown

    // Reset the selected value if it becomes invalid
    if (
        levelCPMKDropdown.value &&
        parseInt(levelCPMKDropdown.value, 10) > levelCPLValue
    ) {
        levelCPMKDropdown.value = "";
    }
}

function updateInput(input) {
    var uppercaseValue = input.value.toUpperCase().replace(/[^A-Z0-9-]/g, "");

    // Terapkan validasi minlength secara manual jika diperlukan
    if (uppercaseValue.length >= 4) {
        input.setCustomValidity("");
    } else {
        input.setCustomValidity("Panjang minimal adalah 4 karakter");
    }

    input.value = uppercaseValue;
}

function toggleDescription() {
    const dropdown = document.getElementById("cplLevel");
    const description = document.getElementById("deskripsiCPMK");
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
    .getElementById("levelCPMK")
    .addEventListener("change", validateDescription);
document
    .getElementById("deskripsiCPMK")
    .addEventListener("input", validateDescription);

function validateDescription() {
    const level = document.getElementById("levelCPMK").value;
    const description = document
        .getElementById("deskripsiCPMK")
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
