export function loadHTML(targetId, filePath) {
    fetch(filePath)
        .then((response) => response.text())
        .then((html) => {
            document.getElementById(targetId).innerHTML = html;
        })
        .catch((err) => {
            console.error("Không thể tải file:", filePath, err);
        });
}
