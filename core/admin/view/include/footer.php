<!-- Подвал -->
<footer>
footer
</footer>

<script>
    // Основное меню
    // Меню аккордеон
    const acc = document.getElementsByClassName("menu-list");
    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            const panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
</body>
</html>