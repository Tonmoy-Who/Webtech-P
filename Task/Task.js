document.getElementById('addBtn').addEventListener('click', function () {
    const title = document.getElementById('title').value.trim();
    const year = document.getElementById('year').value.trim();

    const currentYear = new Date().getFullYear();
    const titlePattern = /^[A-Za-z]+$/;

   
    if (title === "" || !titlePattern.test(title)) {
        alert("Title must contain alphabetic characters only (no spaces or numbers).");
        return;
    }

    if (!/^\d{4}$/.test(year) || year < 1900 || year > currentYear) {
        alert("Year must be a 4-digit number between 1900 and the current year.");
        return;
    }

    
    const tableBody = document.querySelector("#bookTable tbody");
    const row = document.createElement("tr");

    if (year < 2000) {
        row.classList.add("light-gray");
    } else {
        row.classList.add("light-green");
    }

    row.innerHTML = `
        <td>${title}</td>
        <td>${year}</td>
    `;

    tableBody.appendChild(row);

    
    document.getElementById('title').value = "";
    document.getElementById('year').value = "";
});
