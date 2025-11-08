// script.js
document.getElementById('update-prize').addEventListener('click', function() {
    const newPrize = prompt("Enter new prize:");
    if (newPrize) {
        document.getElementById('dress-prize').innerText = `Prize: $${newPrize}`;
    }
});

document.getElementById('delete-option').addEventListener('click', function() {
    const dressAvailable = parseInt(document.getElementById('dress-available').innerText);
    if (dressAvailable > 0) {
        document.getElementById('dress-available').innerText = dressAvailable - 1;
    } else {
        alert("No dresses available to delete.");
    }
});
