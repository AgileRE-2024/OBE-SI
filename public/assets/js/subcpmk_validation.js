function onCPMKSelected(selectElement) {
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    const levelCPMK = selectedOption.getAttribute("level-limit");
    const levelCPMKName = selectedOption.getAttribute("level-name");
    const cplLevelInput = document.getElementById("cplLevel");
    const levelSubCPMKDropdown = document.getElementById("levelSubCPMK");

    // Set the Level CPMK name
    cplLevelInput.value = levelCPMKName || "";

    const levelCPMKValue = parseInt(levelCPMK, 10);

    // Update the options in the levelSubCPMK dropdown
    Array.from(levelSubCPMKDropdown.options).forEach((option) => {
        const optionValue = parseInt(option.value, 10);
        if (!isNaN(optionValue) && optionValue > levelCPMKValue) {
            option.style.display = "none"; // Show options within the limit
        } else {
            option.style.display = "block"; // Hide options outside the limit
        }
    });

    // Re-enable dropdown and reset value if the current selection exceeds the limit
    levelSubCPMKDropdown.disabled = false;
    if (parseInt(levelSubCPMKDropdown.value, 10) > levelCPMKValue) {
        levelSubCPMKDropdown.value = "";
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const cpmkDropdown = document.getElementById("kodeCPMK");
    const selectedCPMK = cpmkDropdown.value; // Check if a CPMK is already selected

    if (selectedCPMK) {
        // Trigger onCPMKSelected with the currently selected CPMK
        onCPMKSelected(cpmkDropdown);
    }

    // Ensure other fields are validated and updated
    const levelSubCPMKDropdown = document.getElementById("levelSubCPMK");
    if (levelSubCPMKDropdown.value) {
        validateField("deskripsiSubCPMK", "errorText");
        validateField("kriteriaPenilaian", "errorKriteriaText");
        validateField("indikatorPenilaian", "errorIndikatorText");
    }
});

function updateInput(input) {
    var uppercaseValue = input.value.toUpperCase().replace(/[^A-Z0-9-]/g, "");

    if (uppercaseValue.length >= 4) {
        input.setCustomValidity("");
    } else {
        input.setCustomValidity("Panjang minimal adalah 4 karakter");
    }

    input.value = uppercaseValue;
}

function validateField(fieldId, errorTextId) {
    const level = document.getElementById("levelSubCPMK").value;
    const fieldInput = document.getElementById(fieldId);
    const fieldValue = fieldInput.value.toLowerCase();
    const submitButton = document.getElementById("submitButton");
    const errorText = document.getElementById(errorTextId);

    if (level) {
        fieldInput.disabled = false;
        const validVerbs = verbsPerLevel[level] || [];
        const hasValidVerb = validVerbs.some((verb) =>
            fieldValue.includes(verb.toLowerCase()),
        );

        if (hasValidVerb) {
            errorText.style.display = "none";
            submitButton.disabled = false;
        } else {
            errorText.style.display = "block";
            submitButton.disabled = true;
        }
    } else {
        fieldInput.disabled = true;
        errorText.style.display = "none";
        submitButton.disabled = true;
    }
}

document.getElementById("levelSubCPMK").addEventListener("change", () => {
    validateField("deskripsiSubCPMK", "errorText");
    validateField("kriteriaPenilaian", "errorKriteriaText");
    validateField("indikatorPenilaian", "errorIndikatorText");
});

document.getElementById("deskripsiSubCPMK").addEventListener("input", () => {
    validateField("deskripsiSubCPMK", "errorText");
});

document.getElementById("kriteriaPenilaian").addEventListener("input", () => {
    validateField("kriteriaPenilaian", "errorKriteriaText");
});

document.getElementById("indikatorPenilaian").addEventListener("input", () => {
    validateField("indikatorPenilaian", "errorIndikatorText");
});
