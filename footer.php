</main>

<footer>

    <p class="parafooter">© 2026 CityApp- Projet PHP</p>
    <div id="heure"></div>

</footer>

</body>

</html>

<script>
    let div = document.querySelector("#heure");

    const refresh = () => {
        let now = new Date();
        let date = now.toLocaleDateString("fr-FR");
        let heure = now.toLocaleTimeString("fr-FR");
        div.textContent = `${date} ${heure}`;
    }

    setInterval(refresh, 1000);
</script>