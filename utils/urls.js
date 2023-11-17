(async () => {
    const data = await fetch("http://localhost/backend-pi/utils/urls.json");
    urls = await data.json();
})();
