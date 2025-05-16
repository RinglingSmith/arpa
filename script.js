function enableEdit() {
    const content = document.getElementById("wiki-content");
    content.contentEditable = true;
    content.focus();
}

function saveContent() {
    const content = document.getElementById("wiki-content");
    content.contentEditable = false;
    const savedData = content.innerHTML;
    localStorage.setItem("wikiContent", savedData);
    alert("Content saved locally.");
}

document.addEventListener("DOMContentLoaded", () => {
    const saved = localStorage.getItem("wikiContent");
    if (saved) {
        document.getElementById("wiki-content").innerHTML = saved;
    }
});
