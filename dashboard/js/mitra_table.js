document.addEventListener("DOMContentLoaded", function () {
    const nameTableContainer = document.getElementById("MitraTableContainer");
    const paginationContainer = document.getElementById("paginationContainer");

    function fetchNames(page) {
        // Make an AJAX request to fetch names for the given page
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `fetchnames.php?page=${page}`, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const names = JSON.parse(xhr.responseText);
                updateTable(names);
            }
        };
        xhr.send();
    }

    function updateTable(names) {
        // Clear previous content
        nameTableContainer.innerHTML = "";

        // Create a table and header
        const table = document.createElement("table");
        const headerRow = table.insertRow(0);
        const headerCell = headerRow.insertCell(0);
        headerCell.textContent = "Name";

        // Populate the table with names
        for (let i = 0; i < names.length; i++) {
            const row = table.insertRow(i + 1);
            const cell = row.insertCell(0);
            cell.textContent = names[i];
        }

        // Append the table to the container
        nameTableContainer.appendChild(table);
    }

    function createPaginationButtons(totalPages) {
        // Clear previous pagination buttons
        paginationContainer.innerHTML = "";

        // Create pagination buttons
        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement("button");
            button.textContent = i;
            button.addEventListener("click", function () {
                fetchNames(i);
            });
            paginationContainer.appendChild(button);
        }
    }

    // Initial fetch and setup
    fetchNames(1);

    // You may need to determine the total number of pages based on your total record count
    const totalPages = 10; // Replace with the actual total number of pages
    createPaginationButtons(totalPages);
});
