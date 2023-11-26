
async function openModal(url) {
    const response = await fetch(url);
    const content = await response.text();
    document.getElementById('modalContent').innerHTML = content;
    document.getElementById('myModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('myModal').classList.add('hidden');
}

 