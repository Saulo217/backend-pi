urls
(async () => {
    const data = await fetch("http://localhost/backend-pi/utils/utils.json");
    urls = data.json();
})();